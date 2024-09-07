<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- <link rel="stylesheet" href="./asset/bootstrap/bootstrap.min.css"> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
    <link rel="stylesheet" href="./src/output.css">

</head>

<body>



    <div class="font-[sans-serif]">
        <div class="min-h-screen flex fle-col items-center justify-center p-6">
            <div class="grid lg:grid-cols-2 items-center gap-6 max-w-7xl max-lg:max-w-xl w-full">
                <form class="lg:max-w-md w-full" action="index.php?action=login" method="post">
                    <h3 class="text-gray-800 text-3xl font-extrabold mb-12">Registration</h3>
                    <div class="space-y-6">
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Nama lengkap</label>
                            <input name="username" type="text" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-4 focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter name" />
                        </div>
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">NIM</label>
                            <input name="nim" type="text" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-4 focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter email" />
                        </div>
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">Password</label>
                            <input name="password" type="password" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-4 focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter password" />
                        </div>
                        <div>
                            <label class="text-gray-800 text-sm mb-2 block">konfirmasi password</label>
                            <input name="repeat_password" type="password" class="bg-gray-100 w-full text-gray-800 text-sm px-4 py-4 focus:bg-transparent outline-blue-500 transition-all" placeholder="Enter password" />
                        </div>
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 border-gray-300 rounded" />
                            <label for="remember-me" class="ml-3 block text-sm text-gray-800">
                                I accept the <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1">Terms and Conditions</a>
                            </label>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button type="submit" class="py-4 px-8 text-sm font-semibold text-white tracking-wide bg-blue-600 hover:bg-blue-700 focus:outline-none">
                            Create an account
                        </button>
                    </div>
                    <p class="text-sm text-gray-800 mt-6">Already have an account? <a href="login" class="text-blue-600 font-semibold hover:underline ml-1">Login here</a></p>
                </form>

                <div class="h-full max-lg:mt-12">
                    <img src="https://readymadeui.com/login-image.webp" class="w-full h-full object-cover" alt="Dining Experience" />
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <h2>Register</h2>
        
        <form method="post" action="index.php?action=register">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="repeat_password">Confirm Password:</label>
                <input type="password" class="form-control" id="repeat_password" name="repeat_password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

    </div> -->

    <?php if (@$_SESSION['berhasil']) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'yeay',
                text: '<?php echo $_SESSION['berhasil']; ?>',
            })
        </script>
    <?php unset($_SESSION['berhasil']);
    } ?>

    <?php if (@$_SESSION['gagal']) { ?>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Oops!',
                text: '<?php echo $_SESSION['gagal']; ?>',
            })
        </script>
    <?php unset($_SESSION['gagal']);
    } ?>

    <!-- MDB -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script> -->
    <script src="./asset/script.js"></script>
</body>

</html>