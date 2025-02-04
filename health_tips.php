<?php
$stress_level = isset($_GET['stress_level']) ? $_GET['stress_level'] : 'Normal'; // Default to Normal if not set
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Tips - Manage Your Stress</title>
    <style>
        body {
            font-family: cursive;
            margin: 0;
            padding: 0;
            background-color: #f0f4f8;
            text-align: center;
        }
        
        .header {
            padding: 20px;
            background-color: #0984e3;
            color: #fff;
            font-size: 24px;
        }

        .container {
            max-width: 1500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.1);
        }

        .tips-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            text-align: center;
        }

        .tip {
            width: 260px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .tip:hover {
            transform: scale(1.05);
        }

        .tip img {
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .tip h3 {
            font-size: 20px;
            margin: 15px 0;
            color: #2d3436;
        }

        .tip p {
            font-size: 16px;
            color: #555;
            padding: 0 10px 20px;
            text-align: justify;
        }
        
        .normal { background-color: lightgreen; }
        .moderate { background-color: lightsalmon; }
        .high { background-color: lightcoral; }

        .back-btn {
            background-color: #0984e3;
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .back-btn:hover {
            background-color: #74b9ff;
        }
    </style>
</head>
<body>

    <div class="header <?php echo strtolower($stress_level); ?>">
        <h1>Health Tips for <?php echo htmlspecialchars($stress_level); ?> Stress Level</h1>
    </div>

    <div class="container">
        <div class="tips-section">

            <!-- Yoga Section -->
            <div class="tip">
                <img src="../CSS/img/yoga" alt="Yoga Pose">
                <h3>Practice Yoga </h3>
                <p>Try yoga poses for relaxation and mental clarity.</p>
                </div>
                <div class="tip">
                <img src="../CSS/img/exercise.jpg" alt="Yoga Pose">
                <h3>Exercise Regularly</h3>
                <p>Physical activity releases endorphins, which are natural stress-relievers. Even a short walk can make a big difference.</p>
                </div>

            <!-- Meditation Section -->
            <div class="tip">
                <img src="../CSS/img/meditation.jpg" alt="Meditation">
                <h3>Meditate Daily</h3>
                <p>Spend a few minutes each day in silence to center yourself.</p>
            </div>
            <div class="tip">
                <img src="../CSS/img/hobby.jpeg" alt="Meditation">
                <h3>Engage in Hobbies</h3>
                <p>Doing activities you enjoy can be a great way to relax and take your mind off stressors.</p>
            </div>
            <!-- Nutrition Section -->
            <div class="tip">
                <img src="../CSS/img/diet.jpg" alt="Healthy Food">
                <h3>Eat Mindfully</h3>
                <p>Nutritious foods can improve your mood and energy levels, helping you to cope better with stress.</p>
            </div>
            <div class="tip">
                <img src="../CSS/img/coffee.png" alt="Meditation">
                <h3>Limit Caffeine and Alcohol</h3>
                <p>Both can increase stress levels, so it's best to consume them in moderation.</p>
            </div>
            <!-- Nature Section -->
            <div class="tip">
                <img src="../CSS/img/walk.jpg" alt="Nature Walk">
                <h3>Take a Walk in Nature</h3>
                <p>Experience the calming effect of the outdoors.</p>
            </div>

            <!-- Journaling Section -->
            <div class="tip">
                <img src="../CSS/img/journal.jpg" alt="Journaling">
                <h3>Write Your Thoughts</h3>
                <p>Express Emotions, Problem-Solving, Identifying Triggers, Finding Solotions, Providing a Safe Space</p>
                </div>
                 <!-- Meditation Section -->
            <div class="tip">
                <img src="../CSS/img/sleep.jpeg" alt="Meditation">
                <h3>Get Enough Sleep</h3>
                <p>Good quality sleep is essential for managing stress and maintaining overall health.</p>
            </div>

        </div>

        <br>
        <a href="dashboard.php" class="back-btn">View History</a>
    </div>
</body>
</html>
