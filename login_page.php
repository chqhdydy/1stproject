<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        header {
            background-color: #2874f0;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
            position: absolute;
            top: 0;
        }

        .message {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        input[type="submit"] {
            background-color: #2874f0;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>
    <header>
        <h1>홈쇼핑 로그인</h1>
    </header>

    <div class="login-container">
        <!-- 성공 또는 실패 메시지 출력 -->
        <?php if (isset($_GET['success'])): ?>
            <?php if ($_GET['success'] == '1'): ?>
                <p class="message" style="color: green;">로그인 성공!</p>
            <?php elseif ($_GET['success'] == '0'): ?>
                <p class="message" style="color: red;">로그인 실패! 사용자 이름 또는 비밀번호를 확인하세요.</p>
            <?php endif; ?>
        <?php endif; ?>

        <!-- 로그인 폼 -->
        <form action="login.php" method="POST">
            <label for="username">사용자 이름:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">비밀번호:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="로그인">
        </form>
    </div>
</body>
</html>
