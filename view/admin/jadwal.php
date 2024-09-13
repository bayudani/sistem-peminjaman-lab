
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/output.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




</head>

<body>
    <?php
    include './view/layout/sidebar.php';
    ?>
    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        <?php
        include './view/layout/headerAdmin.php';
        ?>
        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-6">

                <h1 class="text-3xl text-black pb-6">Jadwal Lab</h1>

                <!-- <h1 class="text-3xl text-black pb-6">Tables</h1> -->

                <!-- modal -->

                <!-- Modal toggle -->
                <div class="flex justify-center m-5">
                    <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-gray-900 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                        Tambah jadwal lab
                    </button>
                </div>

                <!-- Main modal -->
                <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                        <!-- Modal content -->
                        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                            <!-- Modal header -->
                            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Tambah Lab
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form action="index.php?action=tambahJadwal" method="post">
                                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilh lab</label>
                                        <select name="id_lab" id="id_lab" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <?php foreach ($labs as $lab): ?>
                                                <option value="<?php echo $lab['id_lab']; ?>"><?php echo $lab['nama_lab']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <!-- <div>
                                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih tanggal</label>
                                        <input type="date" name="tanggal" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    </div> -->
                                    <!-- <div>
                                        <label for="id_lab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Lab</label>
                                        <input type="number" name="id_lab" id="id_lab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Lab ID" required="">
                                    </div> -->
                                </div>
                                <button type="submit" class="text-gray-900 inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                                    </svg>
                                    Tambah Lab
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- end modal -->


                <div class="w-full mt-6">
                    <p class="text-xl pb-3 flex items-center">
                        <i class="fas fa-list mr-3"></i> Data Lab
                    </p>
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white" id="dataTable">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama lab</th>
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Waktu mulai</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Waktu selesai</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php foreach ($jadwal as $jadwals): ?>
                                    <tr>
                                        <td class="w-1/3 text-left py-3 px-4"><?php echo $jadwals['nama_lab'] ?></td>
                                        <td class="w-1/3 text-left py-3 px-4"><?php echo $jadwals['waktu_mulai'] ?></td>
                                        <td class="w-1/3 text-left py-3 px-4"><?php echo $jadwals['waktu_selesai'] ?></td>
                                        <td class="border px-4 py-2 flex ">
                                            <a href="index.php?action=editJadwal&id_jadwal=<?php echo $jadwals['id_jadwal']; ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-3">Edit</a>
                                            <a href="index.php?action=hapusJadwal&id_jadwal=<?php echo $jadwals['id_jadwal']; ?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded alert_notif">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <p class="pt-3 text-gray-600">
                        Source: <a class="underline" href="https://tailwindcomponents.com/component/striped-table">https://tailwindcomponents.com/component/striped-table</a>
                    </p>
                </div>

            </main>
        </div>
    </div>
    <!-- </div> -->

    <?php if (@$_SESSION['berhasil']) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Oops!!',
                text: '<?php echo $_SESSION['berhasil']; ?>',
            })
        </script>
    <?php unset($_SESSION['berhasil']);
    } ?>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $("#dataTable").DataTable({
                searching: true, // Enable search feature
                //   responsif:true,
            });
        });

        $('.alert_notif').on('click', function() {
            var getLink = $(this).attr('href');
            Swal.fire({
                title: "Yakin hapus data?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonColor: '#3085d6',
                cancelButtonText: "Batal"

            }).then(result => {
                //jika klik ya maka arahkan ke proses.php
                if (result.isConfirmed) {
                    window.location.href = getLink;

                }
            })
            return false;
        });
    </script>

</body>

</html>