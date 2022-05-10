<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Comfort Clean</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="" alt="">&nbsp;<span>Need Worker</span> </li>
            <li><img src="" alt="">&nbsp;<span>Job Seeker</span> </li>
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                </div>
                <div class="user">
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="recent-payment">
                    <div class="title">
                        <h2>Need Worker</h2>
                    </div>
                    <table>
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Full Name</th>
                            <th>Phone Number</th>
                            <th>Location</th>
                            <th>Gender</th>
                            <th>Package of Service</th>
                            <th>Service</th>
                            <th>Date of Start</th>
                            <th>Other Requirment</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        
                        
                        
                        
                            <tbody>
                            <?php
                            include_once '../dbh.inc.php';

                            $sel = "SELECT * FROM users";
                            $query=$conn->query($sel);
                            while ($row=$query->fetch_assoc())
                            {
                                ?>
                                <tr>
                                <td><?php echo $row['id']; ?></td>
                                 <td><?php echo $row['full_name']; ?></td>
                                 <td><?php echo $row['phone_number']; ?></td>
                                 <td><?php echo $row['locationn']; ?></td>
                                 <td><?php echo $row['gender']; ?></td>
                                 <td><?php echo $row['package']; ?></td>
                                 <td><?php echo $row['servicee']; ?></td>
                                 <td><?php echo $row['start_datee']; ?></td>
                                 <td><?php echo $row['other']; ?></td>
                                 <td><a href="" class="btn-success">Not Get</a>
                                     <a href="" class="btn-danger">Delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                      
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
