<!-- Aba Logs do Sistema -->
<div class="tab-pane fade" id="logs">
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">
            <h5 class="mb-0"><i class="bi bi-file-text me-2"></i>Logs do Sistema</h5>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-2">
                    <select class="form-select">
                        <option>Todos os logs</option>
                        <option>Erros</option>
                        <option>Avisos</option>
                        <option>Informações</option>
                        <option>Debug</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="date" class="form-control" value="2025-09-22">
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option>Últimas 24h</option>
                        <option>Última semana</option>
                        <option>Último mês</option>
                        <option>Personalizado</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar nos logs...">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-100">Filtrar</button>
                </div>
            </div>

            <!-- Console de Logs -->
            <div class="bg-dark text-light p-3 rounded mb-3" style="height: 400px; overflow-y: auto; font-family: monospace; font-size: 0.9rem;">
                <div class="text-success">[2025-09-22 10:30:15] INFO: Sistema iniciado com sucesso</div>
                <div class="text-info">[2025-09-22 10:31:02] INFO: Usuário 'admin' fez login (IP: 192.168.1.100)</div>
                <div class="text-info">[2025-09-22 10:32:15] INFO: Sala A101 reservada por prof.silva</div>
                <div class="text-warning">[2025-09-22 10:35:10] WARN: Tentativa de acesso a página restrita por usuário não autenticado</div>
                <div class="text-info">[2025-09-22 10:36:22] INFO: Backup automático iniciado</div>
                <div class="text-success">[2025-09-22 10:36:45] INFO: Backup automático concluído (2.5MB)</div>
                <div class="text-danger">[2025-09-22 10:40:25] ERROR: Falha na conexão com banco de dados (Timeout)</div>
                <div class="text-warning">[2025-09-22 10:40:30] WARN: Tentativa de reconexão com banco de dados</div>
                <div class="text-success">[2025-09-22 10:41:00] INFO: Conexão com banco de dados restaurada</div>
                <div class="text-info">[2025-09-22 10:42:10] INFO: Reserva ID:15 cancelada por admin</div>
                <div class="text-warning">[2025-09-22 10:43:30] WARN: Usuário 'guest' tentou fazer login com credenciais inválidas</div>
                <div class="text-danger">[2025-09-22 10:44:15] ERROR: Falha ao enviar email de notificação</div>
                <div class="text-info">[2025-09-22 10:45:00] INFO: Usuário 'prof.silva' fez logout</div>
                <div class="text-info">[2025-09-22 10:46:30] INFO: Nova sala C303 cadastrada por admin</div>
                <div class="text-warning">[2025-09-22 10:47:45] WARN: Espaço em disco baixo (85% usado)</div>
            </div>

            <!-- Estatísticas de Logs -->
            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="card bg-danger text-white">
                        <div class="card-body text-center">
                            <h4>3</h4>
                            <p class="mb-0">Erros</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-warning text-dark">
                        <div class="card-body text-center">
                            <h4>8</h4>
                            <p class="mb-0">Avisos</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-info text-white">
                        <div class="card-body text-center">
                            <h4>25</h4>
                            <p class="mb-0">Informações</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-secondary text-white">
                        <div class="card-body text-center">
                            <h4>156</h4>
                            <p class="mb-0">Total Hoje</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <button class="btn btn-outline-secondary">
                    <i class="bi bi-download me-2"></i>Exportar Logs
                </button>
                <button class="btn btn-outline-warning ms-2">
                    <i class="bi bi-arrow-clockwise me-2"></i>Atualizar
                </button>
                <button class="btn btn-outline-danger ms-2" onclick="return confirm('Tem certeza que deseja limpar todos os logs?')">
                    <i class="bi bi-trash me-2"></i>Limpar Logs
                </button>
            </div>
        </div>
    </div>
</div>