<x-guest-layout>
    <form action="{{route('aulas.store')}}" method="POST">
        @csrf

        <div>

            <x-input-label for="email" :value="__('Matéria')" />
            <x-text-input id="email" class="block mt-1 w-full" name="materia" type="text" />
        </div>

        <div>

            <x-input-label for="email" :value="__('Descrição')" />
            <x-text-input id="email" class="block mt-1 w-full" name="descricao" type="text" />
        </div>

        <div>

            <x-input-label for="email" :value="__('Horário')" />
            <x-text-input id="email" class="block mt-1 w-full" name="horario" type="text" />
        </div>

        <div>

            <x-input-label for="email" :value="__('Professor')" />
            <x-text-input id="email" class="block mt-1 w-full" name="professor" type="text" />
        </div>

        <x-primary-button class="mt-3">Registrar</x-primary-button>
        
    </form>
</x-guest-layout>

