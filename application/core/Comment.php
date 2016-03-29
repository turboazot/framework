<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 04.12.2015
 * Time: 6:11
 */

class Comment
{
    protected $name;
    protected $comments;
    protected $db_postId;
    protected $db_tableName;
    protected $dom_newCommentContainerClass;
    protected $dom_newCommentOpenButtonClass;
    protected $dom_newCommentTextAreaClass;
    protected $dom_newCommentAddButtonClass;
    protected $dom_newCommentCancelButtonClass;

    protected static $allCommentNames = array('comm', 'client', 'customer');

    const AJAX_HANDLER = 'add-comment.php';
    const SUCCESS_FUNCTION_ENDING = 'successFunction';

    public static function checkName($name) {
        if(in_array($name, self::$allCommentNames)) {
            return true;
        } else {
            return false;
        }
    }

    public function __construct($name, $db_postId, $db_tableName, $dom_newCommentContainerClass, $dom_newCommentOpenButtonClass,
    $dom_newCommentTextAreaClass, $dom_newCommentAddButtonClass, $dom_newCommentCancelButtonClass) {
        $this->name = $name;
        $this->db_postId = $db_postId;
        $this->db_tableName = $db_tableName;
        $this->dom_newCommentContainerClass = $dom_newCommentContainerClass;
        $this->dom_newCommentOpenButtonClass = $dom_newCommentOpenButtonClass;
        $this->dom_newCommentTextAreaClass = $dom_newCommentTextAreaClass;
        $this->dom_newCommentAddButtonClass = $dom_newCommentAddButtonClass;
        $this->dom_newCommentCancelButtonClass = $dom_newCommentCancelButtonClass;
    }

    public function initAllComments($postId) {
        $comments = Database::GetAll("SELECT * FROM " . $this->db_tableName .
            " WHERE com_post_id = :postid",
            array(':postid' => $postId));

        $this->comments = $comments;
    }

    public function initCommentAuthor() {
        foreach ($this->comments as $comment) {
            $comment['com_author'] = User::get_full_name($comment['com_author']);
        }
    }

    public function getAllComments($postId) {
        $this->initAllComments($postId);
        $this->initCommentAuthor();
        return $this->comments;
    }

    public function generateJavascriptCode() {
    	$js = '';
        $js .= '$(function(){' . "\n";
        $js .= "\t" . 'var ' . $this->name . '_textArea = $(".' . $this->dom_newCommentTextAreaClass . '");' . "\n";
        $js .= "\t" . 'var ' . $this->name . '_openButton = $(".' . $this->dom_newCommentOpenButtonClass . '");' . "\n";
        $js .= "\t" . 'var ' . $this->name . '_container = $(".' . $this->dom_newCommentContainerClass . '");' . "\n";
        $js .= "\t" . 'var ' . $this->name . '_addButton = $(".' . $this->dom_newCommentAddButtonClass . '");' . "\n";
        $js .= "\t" . 'var ' . $this->name . '_cancelButton = $(".' . $this->dom_newCommentCancelButtonClass . '");' . "\n" . "\n";

        $js .= "\t" . 'function ' . $this->name . '_' . self::SUCCESS_FUNCTION_ENDING . '(html) {' . "\n";
        $js .= "\t" . "\t" . $this->name . '_container.hide("fast", function(){' . "\n";
        $js .= "\t" . "\t" . "\t" . $this->name . '_openButton.show("fast");' . "\n";
        $js .= "\t" . "\t" . "\t" . $this->name . '_openButton.before(html);' . "\n";
        $js .= "\t" . "\t" . '})' . "\n";
        $js .= "\t" . '}' . "\n" . "\n";

        $js .= "\t" . $this->name . '_openButton.click(function(event){' . "\n";
        $js .= "\t" . "\t" . '$(this).hide();' . "\n";
        $js .= "\t" . "\t" . $this->name . '_container.show();' . "\n";
        $js .= "\t" . "\t" . $this->name . '_textArea.focus();' . "\n";
        $js .= "\t" . '});' . "\n" . "\n";

        /* when start writing the comment activate the "add" button */
        $js .= "\t" . $this->name . '_textArea.bind("input propertychange", function() {' . "\n";
        $js .= "\t" . "\t" . $this->name . '_addButton.css("opacity", "0.6");' . "\n";
        $js .= "\t" . "\t" . 'var checklength = $(this).val().length;' . "\n";
        $js .= "\t" . "\t" . 'if(checklength){ ' . $this->name . '_addButton.css("opacity", "1"); }' . "\n";
        $js .= "\t" . '});' . "\n" . "\n";

        /* on clic  on the cancel button */
        $js .= "\t" . $this->name . '_cancelButton.click(function(){' . "\n";
        $js .= "\t" . "\t" . $this->name . '_textArea.val("");' . "\n";
        $js .= "\t" . "\t" . $this->name . '_container.fadeOut("fast", function(){' . "\n";
        $js .= "\t" . "\t" . "\t" . $this->name . '_openButton.fadeIn("fast");' . "\n";
        $js .= "\t" . "\t" . '});' . "\n";
    	$js .= "\t" . '});' . "\n" . "\n";

        // on post comment click
        $js .= "\t" . $this->name . '_addButton.click(function(){' . "\n";
        $js .= "\t" . "\t" . 'if( !' . $this->name . '_textArea.val()){' . "\n";
        $js .= "\t" . "\t" . "\t" . 'alert("You need to write a comment!");' . "\n";
        $js .= "\t" . "\t" . '}else{' . "\n" . "\n";
        // ajax
        $js .= $this->generateAjaxCode() . "\n";
        $js .= "\t" . "\t" . '}' . "\n";
        $js .= "\t" . '});' . "\n";
        $js .= '});' . "\n";

        return $js;
    }

    public function generateAjaxCode() {
        $dataArray = array(
            array(
                'var_name' => 'checkVariable',
                'var_value' => $this->name,
                'var_type' => 'string'
            ),

            array(
                'var_name' => 'tableName',
                'var_value' => $this->db_tableName,
                'var_type' => 'string'
            ),

            array(
                'var_name' => 'comment',
                'var_value' => $this->name . '_textArea.val()',
            ),

            array(
                'var_name' => 'postId',
                'var_value' => $this->db_postId
            ),

            array(
                'var_name' => 'userId',
                'var_value' => Auth::getCurrentUserId()
            )
        );

        $ajax = new Ajax($dataArray, self::AJAX_HANDLER, $this->name . '_' . self::SUCCESS_FUNCTION_ENDING);
        $ajax_code = $ajax->generateAjaxQuery();

        return $ajax_code;
    }

    public static function addComment($commentBody, $postId, $authorId, $tableName) {
        Database::Execute("INSERT INTO " . $tableName . " (com_post_id, com_body, com_date, com_author)
            VALUES (:postid, :combody, :comdate, :comauthor)",
                array(':postid' => $postId, ':combody' => $commentBody,
                    ':comdate' => date('d.m.Y h:i:s'), ':comauthor' => $authorId));
    }
}