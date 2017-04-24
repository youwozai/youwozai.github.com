<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First PHP</title>
	
</head>
<body>
<form name="form_a" method="post", action="fa.php">
    用户名：
    <input name="user" type="text" value="" size="12" maxlength="1000">
    <br/>
    密码：
    <input name="pwd" type="password" value="" size="12" maxlength="20">
    <br/>
    性别：
    <input name="sex" type="radio" value="男" checked>男
    <input name="sex" type="radio" value="女">女
    <br/><br/>
    购买书籍：<br/>
    <?php
        $books = array("Linux设计", "C++软件设计", "PHP网页开发");
        foreach ($books as $i=>$book) {
            echo "<input name=\"books\" type=\"checkbox\" value=$i>$book\n<br>\n";
        }
    ?>
    <br/>
    选择课程：
    <select name="class" id="class">
    <?php
        $classes = array("C++程序设计", "C程序设计", "MFC程序设计", "Qt编程", "网络编程", "SQL数据库设计");
        foreach ($classes as $key=>$value) {
            echo '<option value="' .$key.'">' . $value . '</option>\n';
        }
    ?>
    </select>
    <br/>
    <input name="submit" type="submit" value="提交">
</form>
</body>
</html>