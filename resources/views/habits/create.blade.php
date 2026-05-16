<x-layout>
    <main class="py-10">
        <section class="bg-white max-w-[600px] mx-auto p-10 pb-6border-2 mt-4">
            <h1>
                Cadastrar novo Hábito
            </h1>

            <form action="{{ route('habit.store') }}" method="post" class="flex flex-col">
                @csrf
                <div class="flex flex-col gap-2 mb-2">
                    <label for="name">
                        Nome do hábito:
                    </label>
                    <input type="text" name="name" placeholder="Ler 10 páginas"
                        class="bg-white p-2 border-2 @error('name') border-red-500 @enderror">

                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-white border-2 p-2">
                    Entrar
                </button>
            </form>
        </section>
    </main>
</x-layout>