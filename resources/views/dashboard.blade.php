<x-layout>
    <main class="py-10">
        <h1 class="font-bold text-4x1 text-center">
            Dashboard
        </h1>

        <a href="{{ route('habit.create') }}" class="p-2 border-2 bg-white font-bold">
            Cadastrar Hábito</a>


        <p class="bg-green-100 border border-green-500 px-2 block mt-4 max-w-[200px]">
            {{ session('success') }}
        </p>

        @session('success')
        @endsession
        <div>
            <h2 class="text-xl mt-4">
                Listagem de Hábitos
            </h2>

            <ul class="flex flex-col gap-2">
                @forelse ($habits as $item)
                    <li class="pl-4">
                        <div class="flex gap-2 items-center">
                            <p class="font-bold text-x1">
                                - {{ $item->name }}
                            </p>
                            <p class="">
                                [{{ $item->habitLogs->count() }}]
                            </p>
                            <form action="{{ route('habit.destroy', $item) }}" method="post">

                                @method('DELETE');

                                <button
                                type="submit" class="bg-red-500 text-white p-1 
                                hover:opacity-50 cursor-pointer">
                                    <x-icons.trash />
                                </button>
                            </form>
                        </div>
                    </li>
                @empty

                    <p>
                        Ainda não tem nunhum habito cadastrado
                    </p>
                    <a href="/habito/cadastrar" class="bg-white p-2 border-2">
                        Cadastre um novo hábito agora
                    </a>
                @endforelse
            </ul>
        </div>
    </main>
</x-layout>