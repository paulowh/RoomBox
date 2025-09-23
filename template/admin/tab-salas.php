<!-- Aba Gerenciar Salas -->
<div class="tab-pane fade" id="salas">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0"><i class="bi bi-door-open me-2"></i>Gerenciamento de Salas</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6">
                    <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#modalSala">
                        <i class="bi bi-plus-circle me-2"></i>Nova Sala
                    </button>
                </div>
                <div class="col-md-6">
                    <select class="form-select">
                        <option>Todas as salas</option>
                        <option>Disponíveis</option>
                        <option>Ocupadas</option>
                        <option>Manutenção</option>
                    </select>
                </div>
            </div>

            <!-- Grid de Salas -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card border-success">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sala A101</h5>
                            <p class="card-text">
                                <i class="bi bi-people me-2"></i>30 alunos<br>
                                <i class="bi bi-tv me-2"></i>Laboratório
                            </p>
                            <span class="badge bg-success">Disponível</span>
                            <div class="mt-2">
                                <button class="btn btn-sm btn-primary">Editar</button>
                                <button class="btn btn-sm btn-warning">Manutenção</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-warning">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sala B205</h5>
                            <p class="card-text">
                                <i class="bi bi-people me-2"></i>45 alunos<br>
                                <i class="bi bi-projector me-2"></i>Auditório
                            </p>
                            <span class="badge bg-warning">Ocupada</span>
                            <div class="mt-2">
                                <button class="btn btn-sm btn-primary">Editar</button>
                                <button class="btn btn-sm btn-success">Liberar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-danger">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sala C302</h5>
                            <p class="card-text">
                                <i class="bi bi-people me-2"></i>25 alunos<br>
                                <i class="bi bi-laptop me-2"></i>Informática
                            </p>
                            <span class="badge bg-danger">Manutenção</span>
                            <div class="mt-2">
                                <button class="btn btn-sm btn-primary">Editar</button>
                                <button class="btn btn-sm btn-success">Ativar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card border-success">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sala D401</h5>
                            <p class="card-text">
                                <i class="bi bi-people me-2"></i>40 alunos<br>
                                <i class="bi bi-book me-2"></i>Sala Comum
                            </p>
                            <span class="badge bg-success">Disponível</span>
                            <div class="mt-2">
                                <button class="btn btn-sm btn-primary">Editar</button>
                                <button class="btn btn-sm btn-warning">Manutenção</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>