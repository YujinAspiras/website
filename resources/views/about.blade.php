<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Profiles</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .profile-card {
            background-color: #fff;
            width: 300px;
            margin: 20px;
            margin-top: 50px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profile-picture {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        p {
            font-size: 14px;
            margin: 0;
            font-style: italic;
            color: #474646;
        }

        h1 {
            color: #393737;
            font-size: 18px;
            font-weight: bold;
            margin-top: 5px;
            margin-bottom: 5px;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .footer {
            background: #100924;
            padding: 15px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .back-button-container {
    padding: 20px;
    text-align: center;
}

.back-button {
    display: inline-block;
    padding: 10px 20px;
    font-size: 16px;
    text-decoration: none;
    color: #fff; /* Set your desired text color */
    background-color: #007bff; /* Set your desired button color */
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.back-button:hover {
    background-color: #0056b3; /* Set your desired hover color */
}
    </style>
</head>

<body>
    <div class="back-button-container">
        <a href="{{route('home')}}" class="back-button">&#8592; Back</a>
    </div>

    <div class="profile-card">
        <img class="profile-picture" src="{{asset('images/aspiras.png')}}" alt="Profile Picture">
        <h1>Yujin L. Aspiras</h1>
        <h2>Project Manager</h2>
        <p>A Project Manager is a professional in charge of ensuring their teams complete all projects on time and within budget.</p>
        <h2>2 years of Experience</h2>
    </div>

    <div class="profile-card">
        <img class="profile-picture" src="{{asset('images/fung.png')}}" alt="Profile Picture">
        <h1>Christopher Fung</h1>
        <h2>Mobile Developer</h2>
        <p>Focus on developing software or systems for mobile devices. This role has become popular as more e-commerce and other digital interactions are taking place through smartphones.</p>
        <h2>3 years of Experience</h2>
    </div>

    <div class="profile-card">
        <img class="profile-picture" src="{{asset('images/alvear.png')}}" alt="Profile Picture">
        <h1>Hans Alvear</h1>
        <h2>Back End Developer</h2>
        <p>Creating the server side of the application and filling it with user-oriented elements. Developing code and libraries that can be used an unlimited number of times. </p>
        <h2>3 years of Experience</h2>
    </div>

    <div class="profile-card">
        <img class="profile-picture" src="{{asset('images/adrian.png')}}" alt="Profile Picture">
        <h1>Adrian Aberin</h1>
        <h2>Process consultant</h2>
        <p>A project management consultant plays the role of a planner, advisor, and a project management team leader to conceptualize and implement solutions that relate to quality or process improvements.</p>
        <h2>2 years of Experience</h2>
    </div>

    <div class="profile-card">
    <img src="{{URL::asset('images/sheen.png')}}" alt="profile Pic" height="200" width="200">
        <h1>Sheena Suarez Pula</h1>
        <h2>Front End Developer</h2>
        <p>Front-end developers use HTML, CSS, and JavaScript to build the client side of a website.</p>
        <h2>2 years of Experience</h2>
    </div>

    <div class="footer">
        <p>&copy; SIBOL Up. All rights reserved.</p>
    </div>

</body>

</html>
