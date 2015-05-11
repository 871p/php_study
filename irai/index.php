<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>開発依頼送信フォーム</title>
</head>
<body>

<form method = "post" action = "../irai/check.php">
タイトルを入力してください<font color="#ff0000">※</font><br />
<input name = "title" type = "text" style = "width:400px"><br />
担当者を入力してください<font color="#ff0000">※</font><br />
    <p>
        <select name="tantousya" id="tantousya">
            <?php
            $people = array ('サンプル１','サンプル２');
            foreach($people as $tantousya){
                print('<option value="'.$tantousya.'">'.$tantousya.'</option>');
            }
            ?>
        </select>
    </p>
依頼送信先を入力してください<font color="#ff0000">※</font><br />
    <p>
        <select name="irai_sousinsaki" id="irai_sousinssaki">
            <?php
            $destinations = array ('person1','person2');
            foreach($destinations as $irai_sousinsaki){
                print('<option value="'.$irai_sousinsaki.'">'.$irai_sousinsaki.'</option>');
            }
            ?>
        </select>
    </p>
事業を入力してください<font color="#ff0000">※</font> <br />
    <p>
        <select name="project" id="project">
            <?php
            $projects= array ('person1','person2');
            foreach($projects as $project){
                print('<option value="'.$project.'">'.$project.'</option>');
            }
            ?>
        </select>
    </p>
カテゴリを入力してください<font color="#ff0000">※</font><br />
    <p>
         <select name="category" id="category">
            <?php
            $categories = array  ('person1','person2');
            foreach($categories as $category){
                print('<option value="'.$category.'">'.$category.'</option>');
            }
            ?>
        </select>
    </p>
内容を入力してください<font color="#ff0000">※</font><br />
<input name = "contents" type = "text" style = "width:400px;height:100px";><br />
一次相談者を入力してください<br />
    <p>
        <select name="first_consultant" id="first_consultant">
            <?php
            $first_consultants = array  ('person1','person2');
            foreach($first_consultants as $first_consultant){
                print('<option value="'.$first_consultant.'">'.$first_consultant.'</option>');
            }
            ?>
        </select>
    </p>
希望期日を入力してください<font color="#ff0000">※</font><br />
<input name = "due_date" type = "text" style = "width:400px"><br />
関連する依頼を入力してください<font color="#ff0000">※</font><br />
<input name = "kanren_irai" type = "text" style = "width:400px"><br />
<br />
<font color="#ff0000">※</font>は必須項目です<br />
<input type ="submit"  value = "送信">
</form>

</body>
</html>