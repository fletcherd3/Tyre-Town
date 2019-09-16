<?php
// PHP doc that gets the needed target values from the database with an sql statement.

require_once("./request/Connection.php");

$query2 =  "SELECT idtargetValue AS '1', 
rear_axle_camber_left_right_target AS '2', 
rear_axle_camber_cross_target AS '3', 
rear_axle_toe_left_right_target AS '4', 
rear_axle_toe_total_target AS '5', 
rear_axle_geometrical_driving_axis_target AS '6', 
front_axle_camber_left_right_target AS '7', 
front_axle_camber_cross_target AS '8', 
front_axle_caster_left_right_target AS '9', 
front_axle_caster_cross_target AS '10', 
front_axle_sai_left_right_target AS '11', 
front_axle_sai_cross_target AS '12', 
front_axle_track_differential_angle_left_right_target AS '13',
front_axle_toe_left_right_target AS '14',
front_axle_toe_total_target AS '15',
front_axle_setback_target AS '16',
front_axle_max_steering_lock_left_steer_left_target AS '17',
front_axle_max_steering_lock_left_steer_right_target AS '18',
front_axle_max_steering_lock_right_steer_left_target AS '19',
front_axle_max_steering_lock_right_steer_right_target AS '20'
FROM info263_19s2_wheel_alignment.targetvalue 
";

$query = mysqli_query($conn, $query2) or die(mysqli_error($conn));
?>