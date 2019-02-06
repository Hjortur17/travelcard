<template>
       <tr class="flex w-full">
              <td class="p-4 w-1/3 text-md">Nafn</td>
              <td class="p-4 w-1/3 text-md">Email</td>
              <td class="p-4 w-1/3 text-md">
                     <p class="float-left">Partur</p>
                     <p class="float-right">
                            <a href="#" class="link text-blue hover:text-blue-darker transition mr-2"><i class="far fa-pencil"></i></a>
                     </p>
              </td>
       </tr>
</template>

<script>
       export default {
              data() {
                     return {
                            editing: false
                     };
              }
       }
</script>
