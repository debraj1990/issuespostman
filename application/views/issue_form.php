<?php echo Form::open('form')?>
<form action="form" method="post" accept-charset="utf-8">

<html>
<title>issuespostman - Post issues to GitHub & BitBucket repositories</title>
<body>
<table>

    <tr>
        <td>
            <label>Username:</label>
        </td>
        <td>
            <input type="text" name="username" id="username" placeholder="debraj1990" required="true"/>
        </td>
    </tr>
    <tr>
        <td>
            <label>Password:</label>
        </td>
        <td>
            <input type="password" name="pass" id="pass" placeholder="password" required="true" />
        </td>
    </tr>
    <tr>
        <td>
            <label>Repository url:</label>
        </td>
        <td>
            <input type="text" name="repourl" id="repourl" value="" placeholder="https://github.com/:username/:repository" required="true" />
        </td>
    </tr>
    <tr>
        <td>
            <label>Issue Title:</label>
        </td>
        <td>
            <input type="text" name="title" id="title" placeholder="Issue Title" required="true"/>
        </td>
    </tr>
    <tr>
        <td>
            <label>Issue Description:</label>
        </td>
        <td>
            <textarea name="desc" id="desc" placeholder="Issue Description" required="true"></textarea>
        </td>
    </tr>
<tr>
    <td>
        <?php print form::submit('submit', 'POST'); ?>
    </td>
    </tr>
    <?php ?>

<?php echo form::close(); ?>

</table>
</body>
</html>