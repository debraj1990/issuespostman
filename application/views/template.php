<html>
    <head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title><?php echo $title ?></title>
	<script type="text/javascript">
	    var base_url = '<?php echo URL::base(); ?>';
<!--	    var ext_version = '--><?php //echo $extversion; ?><!--';-->
	</script>
	<?php foreach ($styles as $file) echo HTML::style($file), "\n" ?>
	<?php foreach ($scripts as $file) echo HTML::script($file), "\n" ?>
    </head>
    <body>
    <?php if(!empty($content)) {echo $content."<br/>";}  ?>
    <?php echo Form::open('form')?>
    <form action="form" method="post" accept-charset="utf-8">
        <table>

            <tr>
                <td>
                    <label>Username:</label>
                </td>
                <td>
                    <input type="text" name="username" id="username" placeholder="debraj1990" required="true" autocomplete="off" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password:</label>
                </td>
                <td>
                    <input type="password" name="pass" id="pass" placeholder="password" required="true"  autocomplete="off" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Repository url:</label>
                </td>
                <td>
                    <input type="url" name="repourl" id="repourl" value="" placeholder="https://github.com/:username/:repository" required="true"  autocomplete="off" />
                    (<span class="tool-tip">https://github.com/:username/:repository</span> or <span class="tool-tip">https://bitbucket.org/:username/:repository</span>)
                </td>
            </tr>
            <tr>
                <td>
                    <label>Issue Title:</label>
                </td>
                <td>
                    <input type="text" name="title" id="title" placeholder="Issue Title" required="true" autocomplete="off" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Issue Description:</label>
                </td>
                <td>
                    <textarea name="desc" id="desc" placeholder="Issue Description" required="true" autocomplete="off" ></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <?php print form::submit('submit', 'POST'); ?>
                </td>
            </tr>


            <?php echo form::close(); ?>

        </table>

    </body>
</html>