<?php
/* Smarty version 5.4.5, created on 2025-04-16 00:54:49
  from 'file:edit_patient.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.5',
  'unifunc' => 'content_67fee3b94ceb68_78814100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff34f75a5313ca3feef15b114acf70822e52105e' => 
    array (
      0 => 'edit_patient.tpl',
      1 => 1744756747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_67fee3b94ceb68_78814100 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\patient-management-module\\templates';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Patient</h2>
        <form action="edit_patient.php?id=<?php echo $_smarty_tpl->getValue('patient')['id'];?>
" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->getValue('patient')['name'];?>
" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" value="<?php echo $_smarty_tpl->getValue('patient')['mobile'];?>
" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="datetime-local" class="form-control" id="date" name="date" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('patient')['date'],'%Y-%m-%dT%H:%M');?>
" required>
            </div>
            <div class="form-group">
                <label for="doctor">Doctor</label>
                <input type="text" class="form-control" id="doctor" name="doctor" value="<?php echo $_smarty_tpl->getValue('patient')['doctor'];?>
" required>
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <input type="text" class="form-control" id="department" name="department" value="<?php echo $_smarty_tpl->getValue('patient')['department'];?>
" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Patient</button>
        </form>
    </div>
</body>
</html><?php }
}
