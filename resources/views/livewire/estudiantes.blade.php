<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<td class="px-6 py-4 text-right">
   <button wire:click="crear()" href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Añadir➕</button>
   @if($modal)
      @include('livewire.crear')
   @endif
</td>
   <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
         <tr>
            <th scope="col" class="px-6 py-3">
               Codigo
            </th>
            <th scope="col" class="px-6 py-3">
               Nombre
            </th>
            <th scope="col" class="px-6 py-3">
               Apellido
            </th>
            <th scope="col" class="px-6 py-3">
               Edad
            </th>
            <th scope="col" class="px-6 py-3">
               <span class="sr-only">Edit</span>
            </th>
         </tr>
      </thead>
      <tbody>
      @foreach ($estudiantes as $estudiante)
         <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
            {{$estudiante->codigo}}
            </th>
            <td class="px-6 py-4">
            {{$estudiante->first_n}}
            </td>
            <td class="px-6 py-4">
            {{$estudiante->last_n}}
            </td>
            <td class="px-6 py-4">
            {{$estudiante->edad}}
            </td>
            <td class="px-6 py-4 text-right">
               <button wire:click="editar({{$estudiante->id}})" href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar✍️</button>
            </td>
            <td class="px-6 py-4 text-right">
               <button wire:click="eliminar({{$estudiante->id}})" href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Eliminar➖</button>
            </td>
         </tr>
         @endforeach 
      </tbody>
   </table>
</div>