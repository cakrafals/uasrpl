<div class="col s12 m12 l6">
  <div class="card-panel">
    <?php
		echo $this->session->flashdata("success");
		echo validation_errors('<div class="ui error message"><i class="close icon"></i><div class="header">', '</div></div>');
		$attributes = array('class' => 'ui large form');
		echo form_open('register/kirim', $attributes);
		?>
<title>Register | Javice</title>
    <!--input username -->
<br>
  <div align="center">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <label>Username</label>
            <?php
			        $username = array(
				        'name' => '_username',
				        'placeholder' => 'Username',
				        'autocomplete' => 'off'
			                           );
			        echo form_input($username); ?>

        </div>
   </div><br>

           <!--input email-->
     <div class="row">
        <div class="input-field col s12">
              <label>Email</label>
            <?php
                $email = array(
                    'name' => '_email',
                    'placeholder' => 'Masukan Email',
                    'autocomplete' => 'off'
                      );
                echo form_input($email); ?>

              </div>
          </div><br>

                  <!--input Password -->
      <div class="row">
          <div class="input-field col s12">
            <label>Password</label>
              <?php
	              $password = array(
	        	        'name' => '_password',
	        	        'placeholder' => 'Masukan Password',
				            'autocomplete' => 'off'
	                      );
	        echo form_password($password); ?>

        </div>
    </div><br>

            <!--input Nama-->
      <div class="row">
          <div class="input-field col s12">
            <label>Nama</label>
              <?php
                  $nama = array(
                      'name' => '_nama_lengkap',
                      'placeholder' => 'Nama Lengkap',
                      'max-length' => 35,
                      'min-length' => 5,
                      'autocomplete' => 'off'
                        );
            echo form_input($nama); ?>

          </div>
        </div><br>

            <!--input Jenis Kelamin -->
      <div class="six wide column field">
      	   <?php
  		       $gender = array(
  			          ''	=> 'Jenis kelamin...',
  			          'Pria'	=> 'Pria',
  			          'Perempuan'	=> 'Perempuan'
  		              );
  		echo form_dropdown('gender', $gender, '', 'class="ui fluid dropdown"');
  		?>
    </div><br><br>

              <!--input Alamat -->
     <div class="field">
       <label>Alamat</label><br>
          <?php
            $alamat = array(
              'name' => '_alamat',
              'placeholder' => 'Alamat',
              'min-length' => 5,
              'autocomplete' => 'off'
            );
            echo form_textarea($alamat); ?>
      </div>

              <!--button simpan -->
            <div class="row">
              <div class="input-field col s12">
              <?php echo form_submit('submit', 'Submit')."<br><br>"; ?>
          </div>
       </div>
    </form>
    <?php echo form_close(); ?>
  </div>
</div>
