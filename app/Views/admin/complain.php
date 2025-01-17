<?php

use function PHPUnit\Framework\isNull;

echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>


<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
    <h2 class="font-bold text-xl">List Inbox</h2>
    <div class="flex items-center justify-between mt-5 mb-3" id="search">
        <form method="" class="relative flex justify-end items-center">
            <input type="text" id="searchInput" placeholder="search" class="px-5 py-2 w-64 rounded-2xl border border-gray-400 outline-main">
            <button class="absolute right-5 cursor-pointer align-middle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-gray-400" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </form>
        <div class="flex gap-3">
            <div class="delete-batch hidden">
                <button type="button" class="delete-batch-btn px-2 inline-block" data-action="/kb/administrator/complain/deleteBatch">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-red-500 hover:stroke-red-700">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                </button>
            </div>
            <!-- <a href="#" class="border inline-flex gap-4 border-gray-400 px-6 py-2 rounded-2xl hover:border-green-400 cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                </svg>
                <span class="self-center">13/06/2023</span>
            </a> -->
            <form action="" id="filterForm" class="flex gap-3">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3.5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                        </svg>
                    </div>
                    <input type="text" name="dates" id="date-range-picker" class="border border-gray-400 px-6 py-2 rounded-2xl hover:border-green-400 focus:border-green-400 w-full pl-10 p-2.5" placeholder="Select date.." value=<?= $dates; ?>>
                </div>
                <select name="methodFilter" id="methodFilter" class="border border-gray-400 py-2 rounded-2xl hover:border-green-400 focus:border-green-400 p-2.5">
                    <option value="">Choose inbox type</option>
                    <option value="request" <?php if ($methodFilter === "request") echo "selected" ?>>Request</option>
                    <option value="complain" <?php if ($methodFilter === "complain") echo "selected" ?>>Complain</option>
                </select>
            </form>
            <a href="<?php echo base_url(); ?>kb/administrator/complain/export" class="border border-gray-400 px-6 py-2 rounded-2xl font-medium hover:border-green-400 cursor-pointer ">export</a>
        </div>
    </div>
    <div class="mb-5 flex items-center justify-end text-xs">
        <label for="entries" class="mr-2">Rows per page : </label>
        <div class="relative">
            <?php $options = [10, 25, 50, 100]; ?>
            <?php if (isset($pagination)) : ?>
                <select id="row-entries" data-url="<?php echo base_url(); ?>kb/administrator/complain/fetch" class="appearance-none border border-gray-400 px-6 py-2 rounded-2xl hover:border-blue-500 cursor-pointer focus:outline-none">
                    <?php foreach ($options as $option) : ?>
                        <option value="<?php echo $option; ?>" <?php echo isset($pagination) && $pagination['perPage'] == $option ? 'selected' : ''; ?>><?php echo $option; ?></option>
                    <?php endforeach; ?>
                </select>
            <?php else : ?>
                <select id="row-entries" data-url="<?php echo base_url(); ?>kb/administrator/complain/fetch" class="appearance-none border border-gray-400 px-6 py-2 rounded-2xl hover:border-blue-500 cursor-pointer focus:outline-none">
                    <?php foreach ($options as $option) : ?>
                        <option value="<?php echo $option; ?>" <?php echo isset($pagination) && $pagination['perPage'] == $option ? 'selected' : ''; ?>><?php echo $option; ?></option>
                    <?php endforeach; ?>
                </select>
            <?php endif; ?>
            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </div>
        </div>
    </div>

    <?php if (session()->has('success')) : ?>
        <div class="flash-success" data-flashmessage="<?php echo session('success') ?>"></div>
    <?php else : ?>
        <div class="flash-error" data-flashmessage="<?php echo session('error') ?>"></div>
    <?php endif; ?>

    <div class="relative overflow-x-auto sm:rounded-lg">
        <table class="w-full text-left" id="myTable">
            <thead class="border-b">
                <tr>
                    <th class="p-3">
                        <input type="checkbox" class="delete-all-checkbox" name="" id="">
                    </th>
                    <th class="p-3 flex gap-4 items-center">
                        <span>Email</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 cursor-pointer">
                            <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v13.19l5.47-5.47a.75.75 0 111.06 1.06l-6.75 6.75a.75.75 0 01-1.06 0l-6.75-6.75a.75.75 0 111.06-1.06l5.47 5.47V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                        </svg>
                    </th>
                    <th scope="col" class="p-3">
                        <div class="flex items-center justify-start">
                            Complain
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="p-3">
                        <div class="flex items-center justify-center">
                            Method
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    <th scope="col" class="p-3">
                        <div class="flex items-center justify-center">
                            Status
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th scope="col" class="p-3">
                        <div class="flex items-center justify-center">
                            Open / Close
                            <a href="#">
                                <svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th class="p-3 text-center">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($complains as $complain) : ?>
                    <tr class="clickable-row cursor-pointer border-b <?php if ($complain['is_read'] == 0) echo "bg-gray-50 dark:bg-sky-50" ?> hover:bg-gray-50 dark:hover:bg-sky-50" data-href="<?php echo base_url(); ?>kb/administrator/complain/reply/<?php echo $complain['id'] ?>">
                        <td class="p-3" data-id="<?php echo $complain['id'] ?>">
                            <input type="checkbox" class="cursor-pointer delete-checkbox" name="" id="">
                        </td>
                        <td class="p-3 font-medium text-gray-900 whitespace-nowrap cursor-pointer <?php if ($complain['is_read'] == 0) echo "font-bold" ?>">
                            <?= $complain['email'] ?>
                        </td>
                        <td class="my-5 max-w-[320px] line-clamp-1 <?php if ($complain['is_read'] == 0) echo "font-bold" ?>">
                            <?= $complain['description'] ?>
                        </td>
                        <td class="p-3 <?php if ($complain['is_read'] == 0) echo "font-bold" ?>">
                            <?= $complain['method'] ?>
                        </td>
                        <td class="p-3 text-center">
                            <div class="relative flex justify-center items-center">
                                <select id="status-entries" name="status-entries" class="py-2 ps-4 pe-6 appearance-none cursor-pointer rounded-2xl text-gray-700 focus:outline-none focus:border-blue-500" data-id="<?php echo $complain['id'] ?>">
                                    <option value="pending" class=" bg-white text-black" <?php if ($complain['status'] === "pending") echo "selected"; ?>>Pending</option>
                                    <option value="progress" class="bg-white text-black" <?php if ($complain['status'] === "progress") echo "selected"; ?>>In progres</option>
                                    <option value="solved" class="bg-white text-black" <?php if ($complain['status'] === "solved") echo "selected"; ?>>Solved</option>
                                </select>
                                <svg class="w-2 h-2 absolute right-3 text-gray-400" width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.97607 0.81897L4.055 5.13429L1.00017 0.9126L6.97607 0.81897Z" fill="#CD6200" stroke="#CD6200" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </td>
                        <td class="p-3 text-center">
                            <div class="relative flex justify-center items-center">
                                <select id="case-entries" name="status_case_entries" class="py-2 pe-9 ps-5 appearance-none cursor-pointer rounded-[15px]" data-id="<?= $complain['id']; ?>">
                                    <?php if ($complain['visibility'] == 'closed') : ?>
                                        <option value="closed" class="block px-4 py-2 bg-white text-close-status-text" selected>Close</option>
                                        <option value="open" class="block px-4 py-2 bg-white text-solved-status-text">Open</option>
                                    <?php else : ?>
                                        <option value="closed" class="block px-4 py-2 bg-white text-close-status-text">Close</option>
                                        <option value="open" class="block px-4 py-2 bg-white text-solved-status-text" selected>Open</option>
                                    <?php endif; ?>
                                </select>
                                <svg class="w-2 h-2 absolute ml-[50px] text-gray-400" width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.97607 0.81897L4.055 5.13429L1.00017 0.9126L6.97607 0.81897Z" fill="#A30D11" stroke="#A30D11" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </td>
                        <td class="p-3 text-center">
                            <a class="text-white font-semibold" href="<?php echo base_url(); ?>kb/administrator/complain/reply/<?php echo $complain['id'] ?>">
                                <div class=" rounded-2xl px-6 py-2 bg-blue-600 inline-flex justify-center items-center">
                                    Reply
                                </div>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- Pagination Buttons -->
        <div class="flex justify-center mt-5">
            <nav aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px text-sm">
                    <?php if (isset($pagination) && $pagination['page'] > 1) : ?>
                        <li>
                            <?php

                            $base_url = base_url() . 'kb/administrator/complain';
                            $params = [
                                'page' => $pagination['page'] - 1,
                                'perPage' => $pagination['perPage'],
                            ];

                            if ($dates !== NULL) {
                                $params['dates'] = $dates;
                            }

                            if ($methodFilter !== NULL) {
                                $params['methodFilter'] = $methodFilter;
                            }

                            $url = $base_url . '?' . http_build_query($params);
                            ?>
                            <a href="<?php echo $url ?>" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight bg-white border rounded-l-lg hover:bg-gray-100 hover:text-gray-700 border-white dark:text-gray-400">Previous</a>
                        </li>
                    <?php endif; ?>
                    <?php if (isset($pagination)) : ?>
                        <?php for ($i = 1; $i <= $pagination['totalPages']; $i++) : ?>
                            <li>
                                <?php

                                $base_url = base_url() . 'kb/administrator/complain';
                                $params = [
                                    'page' => $i,
                                    'perPage' => $pagination['perPage'],
                                ];

                                if ($dates !== NULL) {
                                    $params['dates'] = $dates;
                                }

                                if ($methodFilter !== NULL) {
                                    $params['methodFilter'] = $methodFilter;
                                }

                                $url = $base_url . '?' . http_build_query($params);
                                ?>
                                <a href="<?php echo $url; ?>" class="flex items-center justify-center px-3 h-8 border border-white <?php echo ($i == $pagination['page']) ? 'bg-main text-white' : 'bg-white text-gray-400'; ?> hover:bg-main hover:text-white"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                        <?php if ($pagination['page'] < $pagination['totalPages']) : ?>
                            <li>
                                <?php

                                $base_url = base_url() . 'kb/administrator/complain';
                                $params = [
                                    'page' => $pagination['page'] + 1,
                                    'perPage' => $pagination['perPage'],
                                ];

                                if ($dates !== NULL) {
                                    $params['dates'] = $dates;
                                }

                                if ($methodFilter !== NULL) {
                                    $params['methodFilter'] = $methodFilter;
                                }

                                $url = $base_url . '?' . http_build_query($params);
                                ?>
                                <a href="<?php echo $url; ?>" class="flex items-center justify-center px-3 h-8 border border-white <?php echo ($i == $pagination['page']) ? 'bg-main text-white' : 'bg-white text-gray-400'; ?> hover:bg-main hover:text-white">Next</a>
                            </li>
                        <?php endif; ?>
                    <?php else : ?>
                        <!-- Set pagination page active to page 1 when $pagination is not set -->
                        <?php
                        $pagination['page'] = 1;
                        $pagination['perPage'] = 10;
                        ?>
                        <?php for ($i = 1; $i <= $pagination['page']; $i++) : ?>
                            <li>
                                <?php

                                $base_url = base_url() . 'kb/administrator/complain';
                                $params = [
                                    'page' => $i,
                                    'perPage' => $pagination['perPage'],
                                ];

                                if ($dates !== NULL) {
                                    $params['dates'] = $dates;
                                }

                                if ($methodFilter !== NULL) {
                                    $params['methodFilter'] = $methodFilter;
                                }

                                $url = $base_url . '?' . http_build_query($params);
                                ?>
                                <a href="<?php echo $url; ?>" class="flex items-center justify-center px-3 h-8 border border-white <?php echo ($i == $pagination['page']) ? 'bg-main text-white' : 'bg-white text-gray-400'; ?> hover:bg-main hover:text-white">Next</a>
                            </li>
                        <?php endfor; ?>
                        <li>
                            <?php

                            $base_url = base_url() . 'kb/administrator/complain';
                            $params = [
                                'page' => $pagination['page'] + 1,
                                'perPage' => $pagination['perPage'],
                            ];

                            if ($dates !== NULL) {
                                $params['dates'] = $dates;
                            }

                            if ($methodFilter !== NULL) {
                                $params['methodFilter'] = $methodFilter;
                            }

                            $url = $base_url . '?' . http_build_query($params);
                            ?>
                            <a href="<?php echo $url ?>" class="flex items-center justify-center px-3 h-8 leading-tight bg-white border hover:bg-gray-100 hover:text-gray-700 border-white dark:text-gray-400">Next</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>

</div>


<?php echo $this->endSection(); ?>