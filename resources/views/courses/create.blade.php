<div>
    <h2>Cadastrar o Curso</h2>

    <form action="{{ route('courses.store') }}" method="POST">
        {{-- Só aceita valores da própria aplicação, não recebendo de forma externa, aumentando a segurança --}}
        @csrf
        @method('POST')

        <label>Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome do curso" required><br><br>
        <button type="submit">Cadastrar</button>
    </form>
</div>
