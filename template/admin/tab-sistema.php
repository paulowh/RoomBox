<!-- Aba Configurações do Sistema -->
<div class="tab-pane fade" id="sistema">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h5 class="mb-0"><i class="bi bi-cpu me-2"></i>Configurações do Sistema</h5>
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-primary">Configurações Gerais</h6>
                        
                        <div class="mb-3">
                            <label class="form-label">Nome do Sistema</label>
                            <input type="text" class="form-control" value="RoomBox">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Tempo de Sessão (minutos)</label>
                            <input type="number" class="form-control" value="30">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Fuso Horário</label>
                            <select class="form-select">
                                <option>America/Sao_Paulo</option>
                                <option>America/Brasilia</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Idioma do Sistema</label>
                            <select class="form-select">
                                <option>Português (Brasil)</option>
                                <option>Inglês</option>
                                <option>Espanhol</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6 class="text-success">Configurações de Reserva</h6>
                        
                        <div class="mb-3">
                            <label class="form-label">Antecedência Mínima (horas)</label>
                            <input type="number" class="form-control" value="2">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Antecedência Máxima (dias)</label>
                            <input type="number" class="form-control" value="30">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Duração Máxima (horas)</label>
                            <input type="number" class="form-control" value="8">
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">
                                Permitir reservas em finais de semana
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" checked>
                            <label class="form-check-label">
                                Enviar notificações por email
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Aprovar reservas automaticamente
                            </label>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-info">Configurações de Email</h6>
                        
                        <div class="mb-3">
                            <label class="form-label">Servidor SMTP</label>
                            <input type="text" class="form-control" placeholder="smtp.gmail.com">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Porta SMTP</label>
                            <input type="number" class="form-control" value="587">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6 class="text-warning">Configurações de Segurança</h6>
                        
                        <div class="mb-3">
                            <label class="form-label">Tentativas de Login</label>
                            <input type="number" class="form-control" value="3">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Bloqueio Temporário (minutos)</label>
                            <input type="number" class="form-control" value="15">
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle me-2"></i>Salvar Configurações
                    </button>
                    <button type="reset" class="btn btn-outline-secondary ms-2">
                        <i class="bi bi-arrow-clockwise me-2"></i>Restaurar Padrões
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>