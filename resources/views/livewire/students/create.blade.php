	
<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
	<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
		<div class="fixed inset-0 transition-opacity">
			<div class="absolute inset-0 bg-gray-500 opacity-75"></div>
		</div>

		<!-- This element is to trick the browser into centering the modal contents. -->
		<span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

		<div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
			<form>
				<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
					<div class="">
						<div class="mb-4">
							<label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
							<input type="text" class="form-control" placeholder="Enter Title" wire:model="title">
							@error('title') <span class="text-red-500">{{ $message }}</span>@enderror
						</div>
						<div class="mb-4">
							<label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
							<textarea class="rounded form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Enter Description"></textarea>
							@error('description') <span class="text-red-500">{{ $message }}</span>@enderror
						</div>
					</div>

				</div>
				<div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
					<button wire:click.prevent="store()" type="button" class="btn btn-primary">Save</button>
					<button wire:click="closeModal()" type="button" class="btn btn-default">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>