<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title><?php echo $title ?></title>
    <script type="text/javascript">
        var base_url = '<?php echo URL::base(); ?>';
        <!--	    var ext_version = '--><?php //echo $extversion; ?><!--';-->
    </script>
    <?php foreach ($styles as $file) echo HTML::style($file), "\n" ?>
    <?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
</head>
<body>
<div id="maincontainer" class="row">
    <div class="row">
        <div class="col-xs-12" id="headcont">
            <span class="app_name">Issues Postman</span><br/><span style="font-weight: bold;">  Your friendly tool to post issues to your favourite versioning repository</span>
        </div>

    </div>
    <div id="divider"></div>
    <div class="row">
        <div class="col-xs-12 center" id="resultarea"><?php if (!empty($result_content)) {
                echo $result_content;
            } ?></div>
    </div>
    <div class="row" id="issuesform">
        <div class="col-xs-12" id="formParameters">
            <form action="form" method="post" accept-charset="utf-8">
                <div class="form-group customizeParameter row">
                    <label for="yourtext" class="col-md-6 col-xs-12">Username</label>

                    <div class="col-md-6 col-xs-12 ">
                        <input type="text" name="username" id="username" placeholder="username" required="true"
                               autocomplete="off" class="form-control"/>
                    </div>
                </div>
                <div class="form-group customizeParameter row">
                    <label for="yourtext" class="col-md-6 col-xs-12">Password</label>

                    <div class="col-md-6 col-xs-12 ">
                        <input type="password" name="pass" id="pass" placeholder="password" required="true"
                               autocomplete="off" class="form-control"/>
                    </div>
                </div>
                <div class="form-group customizeParameter row">
                    <label for="yourtext" class="col-md-6 col-xs-12">Repository url</label>

                    <div class="col-md-6 col-xs-12 ">
                        <input type="url" name="repourl" id="repourl" value=""
                               placeholder="https://github.com/:username/:repository" required="true" autocomplete="off"
                               class="form-control"
                               title="(https://github.com/:username/:repository or https://bitbucket.org/:username/:repository"/>
                    </div>
                    <div class="col-xs-12">
                        (<span class="tool-tip">https://github.com/:username/:repository</span> or <span
                            class="tool-tip">https://bitbucket.org/:username/:repository</span>)
                    </div>
                </div>
                <div class="form-group customizeParameter row">
                    <label for="yourtext" class="col-md-6 col-xs-12">Issue Title</label>

                    <div class="col-md-6 col-xs-12 ">
                        <input type="text" name="title" id="title" placeholder="Issue Title" required="true"
                               autocomplete="off" class="form-control"/>
                    </div>
                </div>
                <div class="form-group customizeParameter row">
                    <label for="yourtext" class="col-md-6 col-xs-12">Issue Description</label>

                    <div class="col-md-6 col-xs-12 ">
                        <textarea name="desc" id="desc" placeholder="Issue Description" required="true"
                                  autocomplete="off" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group customizeParameter row">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4 generateButton">
                        <?php print form::submit('submit', 'POST AN ISSUE'); ?>
                    </div>
                    <div class="col-xs-4"></div>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>