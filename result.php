<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>charts</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $first=$_GET['first'];
    $second=$_GET['second'];
    $third=$_GET['third'];
    $fourth=$_GET['fourth'];
    $radio=$_GET['radio'];
    ?>

<div class="canvas_1">
    <canvas id="myChart" width="400" height="400"></canvas>
</div>

<script>
let radio= "<?=$radio?>";
let first= "<?=$first?>";
let second= "<?=$second?>";
let third= "<?=$third?>";
let fourth= "<?=$fourth?>";
const ctx = document.getElementById('myChart').getContext('2d');

if(radio==1){
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green'],
        datasets: [{
            label: 'Selivanov charts!',
            data: [first, second, third,fourth],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 206, 86)',
                'rgb(75, 192, 192)'
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
}



else{
     console.log('work');        
     const myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green'],
        datasets: [{
            label: 'Selivanov charts!',
            data: [first, second, third,fourth],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 206, 86)',
                'rgb(75, 192, 192)'
                
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});




  }



</script>
    
</body>
</html>