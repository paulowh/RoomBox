<!-- Aba Histórico de Reservas -->
<div class="tab-pane fade" id="reservas">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h5 class="mb-0"><i class="bi bi-calendar-check me-2"></i>Histórico de Reservas</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="Data início">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="Data fim">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>Todas as reservas</option>
                        <option>Ativas</option>
                        <option>Canceladas</option>
                        <option>Concluídas</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary w-100">
                        <i class="bi bi-search me-2"></i>Filtrar
                    </button>
                </div>
            </div>

            <!-- Resumo Estatístico -->
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="card bg-primary text-white">
                        <div class="card-body text-center">
                            <h3>142</h3>
                            <p class="mb-0">Total de Reservas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success text-white">
                        <div class="card-body text-center">
                            <h3>89</h3>
                            <p class="mb-0">Concluídas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-dark">
                        <div class="card-body text-center">
                            <h3>35</h3>
                            <p class="mb-0">Ativas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body text-center">
                            <h3>18</h3>
                            <p class="mb-0">Canceladas</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lista de Reservas Recentes -->
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Sala</th>
                            <th>Turma</th>
                            <th>Docente</th>
                            <th>Data/Hora</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>A101</td>
                            <td>ADS2024</td>
                            <td>Prof. João Silva</td>
                            <td>22/09/2025 14:00</td>
                            <td><span class="badge bg-warning">Ativa</span></td>
                            <td>
                                <button class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>B205</td>
                            <td>ENG2024</td>
                            <td>Profa. Maria Santos</td>
                            <td>21/09/2025 16:00</td>
                            <td><span class="badge bg-success">Concluída</span></td>
                            <td>
                                <button class="btn btn-sm btn-info">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>