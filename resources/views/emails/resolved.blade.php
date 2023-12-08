<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url('{{ asset('mail/bg_files_path/resolved.jpeg') }}');

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>

<div class="bg" style="height:300px">
    <table width="100%" style="padding-top: 20px;">
        <tr>
            <td style="text-align: center;font-size: 20px;"><strong>Ticket No. :: {{$ticket_no}}</strong></td>
        </tr>
    </table>
</div>


</body>
</html>