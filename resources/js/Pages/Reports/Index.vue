<template>
  <layout>
    <div class="container">
      <!-- SUCCESS MESSAGE BANNER -->
      <div v-if="successMsg" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Alert</strong>
        <span class="block sm:inline">{{ successMsg }}</span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
          <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
      </div>

      <table class="table-auto">
        <thead>
          <tr>
            <th scope="col">Key</th>
            <th scope="col">Title</th>
            <th scope="col">Date Modified</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="report in reports" :key="report.key">
            <td>{{ report.report_key }}</td>
            <td>{{ report.report_title }}</td>
            <td>{{ report.report_modified_date }}</td>
            <td><inertia-link :href="`/reports/${report.key}/edit`">Edit</inertia-link></td>
          </tr>
        </tbody>
        <tfoot>
        </tfoot>
      </table>
    </div>
  </layout>
</template>

<script>
  import layout from "@/Layouts/Dashboard/Layout"

  export default {
    layout: layout,

    props: ['users', 'successMsg']
  }
</script>