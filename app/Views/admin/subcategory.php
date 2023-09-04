<?php echo $this->extend('admin/layout'); ?>

<?php echo $this->section('content'); ?>

<div class="border-2 border-gray-200 bg-white p-7 rounded shadow-md text-sm">
  <div class="flex justify-between items-center">
    <a href="<?php echo base_url(); ?>kb/administrator/category">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 hover:stroke-neutral-700">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </a>
    <div class="font-medium">
      <a href="<?php echo base_url(); ?>kb/administrator/category" class="text-main hover:text-sky-600">Category</a>
      <span> / </span>
      <span>Sub-Category</span>
    </div>
  </div>
  <h2 class="font-bold text-xl mt-6">List Sub-Category</h2>
  <div class="flex justify-between items-center my-5">
    <form method="" class="relative flex justify-end items-center">
      <input type="text" placeholder="search" class="px-5 py-2 w-64 rounded-2xl border border-gray-400 outline-main">
      <button class="absolute right-5 cursor-pointer align-middle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search text-gray-400" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg>
      </button>
    </form>
    <a href="<?php echo base_url(); ?>kb/administrator/category/subcategory/addsubcategory" class="border border-gray-400 px-6 py-2 rounded-2xl hover:border-green-400 cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" width="20" height="20">
        <path strokeLinecap="round" strokeLinejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
      </svg>
    </a>
  </div>

  <table class="w-full text-center">
    <thead class="border-b">
      <tr>
        <th class="p-3">
          <input type="checkbox" name="" id="">
        </th>
        <th class="p-3 relative flex justify-center items-center">
          <span>No</span>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 absolute right-0 cursor-pointer">
            <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v13.19l5.47-5.47a.75.75 0 111.06 1.06l-6.75 6.75a.75.75 0 01-1.06 0l-6.75-6.75a.75.75 0 111.06-1.06l5.47 5.47V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
          </svg>
        </th>
        <th class="p-3 w-64">Name Sub-Category</th>
        <th class="p-3">Action</th>
      </tr>
    </thead>
    <tbody class="border-b">
      <tr class="border-b hover:bg-gray-50">
        <td class="p-3">
          <input type="checkbox" name="" id="">
        </td>
        <td class="p-3">1</td>
        <td class="p-3">Fitur</td>
        <td class="p-3 text-center">
          <a href="<?php echo base_url(); ?>kb/administrator/category/subcategory/editsubcategory" class="px-2 inline-block" title="edit">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-secondary hover:stroke-yellow-600">
              <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
          </a>
          <a href="" class="px-2 inline-block" title="delete">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-5 h-5 stroke-red-500 hover:stroke-red-700">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>
          </a>
        </td>
      </tr>
    </tbody>
  </table>

  <div class="flex justify-center mt-5">
    <nav aria-label="Page navigation example">
      <ul class="inline-flex -space-x-px text-sm">
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 ml-0 leading-tight  bg-white border rounded-l-lg hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">Previous</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">1</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">2</a>
        </li>
        <li>
          <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-white border bg-blue-50 hover:text-blue-700 border-white dark:bg-main dark:hover:text-white">3</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">4</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">5</a>
        </li>
        <li>
          <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight  bg-white border rounded-r-lg hover:bg-gray-100 hover:text-gray-700  border-white dark:text-gray-400 dark:hover:bg-main dark:hover:text-white">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<?php echo $this->endSection(); ?>