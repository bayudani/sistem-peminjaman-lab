<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/output.css">    
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />


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

                <h1 class="text-3xl text-black pb-6">Laboratorium</h1>

                <!-- <h1 class="text-3xl text-black pb-6">Tables</h1> -->

                <!-- modal -->

                <!-- Modal toggle -->
                <div class="flex justify-center m-5">
                    <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-gray-900 bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" type="button">
                        Tambah lab
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
                            <form action="index.php?action=tambahLab" method="post">
                                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lab</label>
                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type lab name" required="">
                                    </div>
                                    <div>
                                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                                        <input type="file" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    </div>
                                    <div>
                                        <label for="id_lab" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID Lab</label>
                                        <input type="number" name="id_lab" id="id_lab" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Lab ID" required="">
                                    </div>
                                    <div>
                                        <label for="laboran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laboran</label>
                                        <select name="laboran_id" id="laboran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required>
                                            <option value="">--- Pilih Laboran ---</option>
                                            <?php foreach ($laboran as $laborans): ?>
                                                <option value="<?= $laborans['id_user'] ?>"><?= $laborans['username'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                                        <textarea name="deskripsi" id="deskripsi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write lab description here" required></textarea>
                                    </div>
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
                                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Laboran</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">NIP/NIK</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                <?php foreach ($total_lab as $labs):?>
                                <tr>
                                    <td class="w-1/3 text-left py-3 px-4"><?php echo $labs['nama_lab'] ?></td>
                                    <td class="w-1/3 text-left py-3 px-4"><?php echo $labs['nama_laboran'] ?></td>
                                    <td class="w-1/3 text-left py-3 px-4"><?php echo $labs['nim_laboran'] ?></td>
                                    
                                </tr>
                                <?php endforeach; ?>
                               
                            </tbody>
                        </table>
                    </div>
                    <p class="pt-3 text-gray-600">
                        Source: <a class="underline" href="https://tailwindcomponents.com/component/striped-table">https://tailwindcomponents.com/component/striped-table</a>
                    </p>
                </div>
                \
            </main>
        </div>
    </div>
    <!-- </div> -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $("#dataTable").DataTable({
                searching: true, // Enable search feature
                //   responsif:true,
            });
        });
    </script>
</body>

</html>