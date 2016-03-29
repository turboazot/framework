{extends file="tpl_index.tpl"}
{block name="main-content"}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {$title}
                <small>preview of simple tables</small>
            </h1>
            <form action="" method="POST" class="filter-form">
                <a class="btn btn-primary filter-btn">Фильтр</a>
                <select class="form-control" id="partner" name="filter[partner]">
                    {foreach from=$partners item=partner}
                        <option value="{$partner.id}">{$partner.first_name}</option>
                    {/foreach}
                </select>
                <select class="form-control" id="month" name="filter[month]">
                    <option value="1">январь</option>
                    <option value="2">февраль</option>
                    <option value="3">март</option>
                    <option value="4">апрель</option>
                    <option value="5">май</option>
                    <option value="6">июнь</option>
                    <option value="7">июль</option>
                    <option value="8">август</option>
                    <option value="9">сентябрь</option>
                    <option value="10">октябрь</option>
                    <option value="11">ноябрь</option>
                    <option value="12">декабрь</option>
                </select>
                <select class="form-control" name="filter[year]" id="year">
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                </select>
            </form>
        </section>

        <!-- Main content -->
        <section class="content">
            {block name="content"}

            {/block}
        </section>
        <!-- /.content -->
    </div>
    <style>
        a.panel-btn {
            float: left;
            width: 18px;
        }


        .filter-form {
            width: 570px;
            float: right;
        }

        .filter-form .form-control {
            float: right;
            width: 150px;
            margin-right: 10px;
        }
        .filter-btn {
            float: right;
        }
    </style>
    <script>
        var month = {$filter.month};
        var partner = {$filter.partner};
        var year = {$filter.year};
    </script>
{/block}
