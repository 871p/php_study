<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>確認ページ</title>
</head>
<body>

<?php
$title = $_POST['title'];
$tantousya = $_POST['tantousya'];
$irai_sousinsaki = $_POST['irai_sousinsaki'];
$project = $_POST['project'];
$category = $_POST['category'];
$contents = $_POST['contents'];
$first_consultant = $_POST['first_consultant'];
$due_date = $_POST['due_date'];
$kanren_irai= $_POST['kanren_irai'];

$title = htmlspecialchars($title);
$contents = htmlspecialchars($contents);
$due_date = htmlspecialchars($due_date);
$kanren_irai = htmlspecialchars($kanren_irai);

if($title == ''){
    echo 'タイトルが入力されていません。<br />';
    print '<br />';
}
else{
    print 'タイトル:';
    print $title;
    print '<br />';
}

echo"担当者:".$tantousya;
print '<br />';
print '<br />';
echo"依頼送信先:".$irai_sousinsaki;
print '<br />';
print '<br />';
echo"事業：".$project;
print '<br />';
print '<br />';
echo"カテゴリ：".$category;
print '<br />';
print '<br />';
if($contents == ''){
    echo "内容が入力されていません。<br />";
    print '<br />';

}
else{
    print "内容:";
    print  $contents;
    print '<br />';
    print '<br />';
}

echo"一次相談者：".$first_consultant;
print '<br />';
print '<br />';
if($due_date == ''){
    echo "希望期日が入力されていません。<br />";
    print '<br />';

}
else{
    print '希望期日:';
    print $due_date;
    print '<br />';
    print '<br />';
}

if($kanren_irai == ''){
    echo "関連依頼が入力されていません。<br />";

}
else{
    print '関連依頼:';
    print $kanren_irai;
    print '<br />';
    print '<br />';
}
if($title==''|| $contents==''|| $due_date==''||$kanren_irai==''){
print '<form method="post" action="thanks.php">';
print '<input type="button" onclick="history.back()" value="戻る">';
print '</form>';
}
else
{
    print '<form method="post" action="thanks.php">';
    print '<input name="title" type="hidden" value="'.$title.'">';
    print '<input name="contents" type="hidden" value="'.$contents.'">';
    print '<input name="due_date" type="hidden" value="'.$due_date.'">';
    print '<input name="kanren_irai" type="hidden" value="'.$kanren_irai.'">';
    print '<input type="button" onclick="history.back()" value="戻る">';
    print '<input type="submit" value="OK">';
    print '</form>';
}
?>

</body>
</html>
