<!-- Aba Backup e Restauração -->
<div class="tab-pane fade" id="backup">
    <div class="card shadow-sm">
        <div class="card-header bg-info text-white">
            <h5 class="mb-0"><i class="bi bi-cloud-download me-2"></i>Backup e Restauração</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="text-info">Criar Backup</h6>
                    <p class="text-muted">Gere um backup completo do banco de dados</p>
                    
                    <div class="mb-3">
                        <label class="form-label">Tipo de Backup</label>
                        <select class="form-select">
                            <option>Backup Completo</option>
                            <option>Apenas Dados</option>
                            <option>Apenas Estrutura</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Incluir Logs</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">Incluir logs do sistema</label>
                        </div>
                    </div>

                    <button class="btn btn-info text-white">
                        <i class="bi bi-download me-2"></i>Gerar Backup
                    </button>
                </div>

                <div class="col-md-6">
                    <h6 class="text-warning">Restaurar Backup</h6>
                    <p class="text-muted">Restaure um backup anterior</p>
                    
                    <div class="mb-3">
                        <label class="form-label">Arquivo de Backup</label>
                        <input type="file" class="form-control" accept=".sql">
                    </div>

                    <div class="alert alert-warning">
                        <i class="bi bi-exclamation-triangle me-2"></i>
                        <strong>Atenção:</strong> Esta operação irá substituir todos os dados atuais.
                    </div>

                    <button class="btn btn-warning">
                        <i class="bi bi-upload me-2"></i>Restaurar Backup
                    </button>
                </div>
            </div>

            <hr>

            <!-- Backups Automáticos -->
            <h6 class="text-success">Backups Automáticos</h6>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label">Ativar backup automático</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select">
                        <option>Diário (02:00)</option>
                        <option>Semanal (Domingo 02:00)</option>
                        <option>Mensal (Dia 1, 02:00)</option>
                    </select>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-sm">
                    <thead class="table-light">
                        <tr>
                            <th>Data/Hora</th>
                            <th>Tipo</th>
                            <th>Tamanho</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>22/09/2025 02:00</td>
                            <td>Backup Automático</td>
                            <td>2.5 MB</td>
                            <td><span class="badge bg-success">Sucesso</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">Download</button>
                                <button class="btn btn-sm btn-outline-danger">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>21/09/2025 02:00</td>
                            <td>Backup Automático</td>
                            <td>2.4 MB</td>
                            <td><span class="badge bg-success">Sucesso</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">Download</button>
                                <button class="btn btn-sm btn-outline-danger">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <td>20/09/2025 02:00</td>
                            <td>Backup Automático</td>
                            <td>-</td>
                            <td><span class="badge bg-danger">Falhou</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-warning">Tentar Novamente</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>