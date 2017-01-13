<?php
$email = array(
  'type'  => 'email',
  'name'  => '_email',
  'placeholder' => 'E-Mail',

);
$password = array(
  'type'  => 'password',
  'name'  => '_password',
  'placeholder' => 'Password'
);

$submit = array(
  'type'  => 'submit',
  'name'  => '_login',
  'value' => 'Login',
  'class' => 'ui fluid large teal submit button'
);
?>

  <?php echo $this->session->flashdata("not_login"); ?>

  <?php if (isset($error)): ?>
    <?php echo '<div class="ui error message"><i class="close icon"></i><div class="header">'.$error.'</div></div>'; ?>
  <?php endif ?>

  <?php
  $attributes = array('class' => 'ui large form');
  echo form_open($this->uri->uri_string, $attributes);
  ?>

  <title> Login | Javice </title>
<br><br>


  <div align="center">
      <label>Email  :  </label><br><br>
          <?php
              echo form_error('_email');
              echo form_input($email);
          ?>
          <br><br>

    <div align="center">
      <label>Password : </label><br><br>
              <?php
                  echo form_error('_password');
                  echo form_input($password);
                  ?>
    </div><br><br>


  <div align="center">
        <?php echo form_submit($submit);?>
    </div>
<br><br>
  <?php echo form_close();?>

  <div class="ui message" align="center">
          BELUM PUNYA AKUN? <a href="register">Daftar Dong Bos!</a>
  </div>
<br><br><br>
