<html>
<head>
    
<style type="text/css">
    .p1{
        font-family: serif;
        margin-left: 30px;
        font-size: 60px;
        color: #35a9db;
    }

    .tabel1{
        font-family: sans-serif;
        color: #141414;
        border-collapse: collapse;
        border: 1px solid #f2f5f7;
        width: 940px;
        background-color: #e0e0e0;
        
    }

    .tabel1 tr th{
        background: #35a9db;
        color: #fff;
        font-weight: normal;
    }

    .tabel1, th, td{
        padding: 8px 20px;
        text-align: center;
    }

    .tabel1 tr:nth-child(even){
        background: #86dcec;
    }

    .fixhead {
        overflow-y: auto;
        height: 1250px;
        width: 940px;
        margin-left: 10px;
        margin-top: 50px;
    }

    .fixhead thead tr th{
        position: sticky;
        top: 0;
    }
    
    .tabel1 th{
        font-size: 25px;
    }

    .tabel1 td{
        font-size: 23px;
    }

    .body {
        background: #fcfeff;

</style>
</head>

<body class="body">
    <p1 class="p1">Monitoring Suhu Penetas Telur</p1>
    <div class="fixhead">
    <table class="tabel1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Lux_1</th>
                <th>Lux_2</th>
                <th>Suhu Array</th>
                <th>Suhu Incubator</th>
                <th>Proximity 1</th>
                <th>Proximity 2</th>
                <th>Blower</th>
                <th>Arus</th>
                <th>Waktu</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                include "connect.php";

                $sql = "SELECT * FROM penetastelur ORDER BY NO DESC";
                $query = mysqli_query($connect, $sql) or die (mysqli_error($connect));
                    
                while($data = mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $data['NO'];?></td>
                    <td><?php echo $data['lux1'];?></td>
                    <td><?php echo $data['lux2'];?></td>
                    <td><?php echo $data['array'];?></td>
                    <td><?php echo $data['incub'];?></td>
                    <td><?php echo $data['prox1'];?></td>
                    <td><?php echo $data['prox2'];?></td>
                    <td><?php echo $data['blower'];?></td>
                    <td><?php echo $data['arus'];?></td>
                    <td><?php echo $data['Waktu'];?></td>
                </tr>

                <?php }
                ?>
        </tbody>
    </table>    
    </div>

</body>
</html>