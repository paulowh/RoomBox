<!-- Aba Gerenciar Usuários -->
<div class="tab-pane fade show active" id="usuarios">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0"><i class="bi bi-people me-2"></i>Gerenciamento de Usuários</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <a href="#" class="btn btn-success">
                        <i class="bi bi-person-plus me-2"></i>Novo Usuário
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Buscar usuário...">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Lista de Usuários -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Usuário</th>
                            <th>Docente Vinculado</th>
                            <th>Nível</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>admin</td>
                            <td>Sistema Administração</td>
                            <td><span class="badge bg-danger">Administrador</span></td>
                            <td><span class="badge bg-success">Ativo</span></td>
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
                            <td>prof.silva</td>
                            <td>Prof. João Silva</td>
                            <td><span class="badge bg-secondary">Usuário</span></td>
                            <td><span class="badge bg-success">Ativo</span></td>
                            <td>
                                <button class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Mais usuários seriam carregados dinamicamente -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>