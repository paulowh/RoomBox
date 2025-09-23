<!-- Aba Gerenciar Docentes -->
<div class="tab-pane fade" id="docentes">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0"><i class="bi bi-mortarboard me-2"></i>Gerenciamento de Docentes</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">

                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalDocente">
                        <i class="bi bi-plus-circle me-2"></i>Novo Docente
                    </button>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar docente...">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Lista de Docentes -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Área</th>
                            <th>RA</th>
                            <th>Usuários Vinculados</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sistema Administração</td>
                            <td>Administração</td>
                            <td>0000000</td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Prof. João Silva</td>
                            <td>Matemática</td>
                            <td>1234567</td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Profa. Maria Santos</td>
                            <td>Física</td>
                            <td>7654321</td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>