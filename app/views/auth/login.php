<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register Form</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 460px;
            overflow: hidden;
        }
        .form-header {
            background-color: #4a90e2;
            color: white;
            padding: 30px;
            text-align: center;
        }
        .form-header h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }
        .form-content {
            padding: 40px;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            color: #333;
        }
        .form-group input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .form-group input:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 0 2px rgba(74, 144, 226, 0.2);
            outline: none;
        }
        .btn {
            width: 100%;
            padding: 14px;
            background-color: #4a90e2;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-weight: 600;
        }
        .btn:hover {
            background-color: #3a7bc8;
        }
        .switch {
            margin-top: 25px;
            font-size: 15px;
            text-align: center;
        }
        .switch a {
            color: #4a90e2;
            text-decoration: none;
            font-weight: 600;
        }
        .switch a:hover {
            text-decoration: underline;
        }
        .error-message {
            background-color: #ffebee;
            color: #d32f2f;
            padding: 12px;
            border-radius: 8px;
            font-size: 15px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Login Form -->
        <form id="loginForm" action="<?= BASEURL?>/auth/signin" method="post">
            <div class="form-header">
                <h2>Login Admin</h2>
            </div>
            <div class="form-content">
                <?php if(isset($_GET)): ?>
                    <div class="error-message">Username / Password salah</div>
                <?php endif; ?>
                
                <div class="form-group">
                    <label for="loginEmail">Username:</label>
                    <input name="username" type="text" id="loginEmail" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password:</label>
                    <input name="password" type="password" id="loginPassword" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="switch">
                    <p>Don't have an account? <a href="#" onclick="toggleForm()">Register</a></p>
                    <a href="<?= BASEURL?>/authUser/login">User</a>
                </div>
            </div>
        </form>

        <!-- Register Form -->
        <form action="<?= BASEURL?>/auth/register" method="post" id="registerForm" style="display: none;">
            <div class="form-header">
                <h2>Register</h2>
            </div>
            <div class="form-content">
                <div class="form-group">
                    <label for="registerName">Username:</label>
                    <input name="username" type="text" id="registerName" required>
                </div>
                <div class="form-group">
                    <label for="registerPassword">Password:</label>
                    <input name="password" type="password" id="registerPassword" required>
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="switch">
                    <p>Already have an account? <a href="#" onclick="toggleForm()">Login</a></p>
                </div>
            </div>
        </form>
    </div>

    <script>
        function toggleForm() {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            loginForm.style.display = loginForm.style.display === 'none' ? 'block' : 'none';
            registerForm.style.display = registerForm.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>