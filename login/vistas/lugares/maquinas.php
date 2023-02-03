  
<!--   /* // Iniciar sesión SSH
  $connection = ssh2_connect('192.168.48.173', 22);
  ssh2_auth_password($connection, 'root', 'Admin.123');

  // Ejecutar comando
  $command = "pct list";
  $stream = ssh2_exec($connection, $command);
  stream_set_blocking($stream, true);
  $output = stream_get_contents($stream);
  echo $output; */
 -->
  <?php 
   ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $connection = ssh2_connect('192.168.48.173',22);
  ssh2_auth_password($connection, 'root', 'Admin.123');

  $stream = ssh2_exec($connection, 'pveum acl list');
stream_set_blocking($stream, true);
$stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
echo "<pre>".stream_get_contents($stream_out)."</pre>";  




?>

