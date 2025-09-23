<!-- Aba Relatórios -->
<div class="tab-pane fade" id="relatorios">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0"><i class="bi bi-graph-up me-2"></i>Relatórios e Estatísticas</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Relatórios Rápidos -->
                <div class="col-md-4 mb-4">
                    <h6 class="text-primary">Relatórios Rápidos</h6>
                    <div class="list-group">
                        <button class="list-group-item list-group-item-action">
                            <i class="bi bi-calendar-week me-2"></i>Reservas da Semana
                        </button>
                        <button class="list-group-item list-group-item-action">
                            <i class="bi bi-graph-up me-2"></i>Salas Mais Utilizadas
                        </button>
                        <button class="list-group-item list-group-item-action">
                            <i class="bi bi-people me-2"></i>Usuários Ativos
                        </button>
                        <button class="list-group-item list-group-item-action">
                            <i class="bi bi-clock me-2"></i>Horários de Pico
                        </button>
                        <button class="list-group-item list-group-item-action">
                            <i class="bi bi-pie-chart me-2"></i>Ocupação por Período
                        </button>
                        <button class="list-group-item list-group-item-action">
                            <i class="bi bi-calendar-month me-2"></i>Relatório Mensal
                        </button>
                    </div>
                </div>

                <!-- Gráficos Estatísticos -->
                <div class="col-md-8">
                    <h6 class="text-success">Estatísticas do Mês</h6>
                    
                    <!-- Simulação de Gráfico de Barras -->
                    <div class="bg-light p-4 rounded mb-3">
                        <h6 class="text-center mb-3">Uso das Salas por Semana</h6>
                        <div class="d-flex justify-content-between align-items-end" style="height: 200px;">
                            <div class="text-center">
                                <div class="bg-primary rounded" style="width: 40px; height: 80%; margin-bottom: 10px;"></div>
                                <small>Sem 1</small>
                            </div>
                            <div class="text-center">
                                <div class="bg-success rounded" style="width: 40px; height: 60%; margin-bottom: 10px;"></div>
                                <small>Sem 2</small>
                            </div>
                            <div class="text-center">
                                <div class="bg-warning rounded" style="width: 40px; height: 90%; margin-bottom: 10px;"></div>
                                <small>Sem 3</small>
                            </div>
                            <div class="text-center">
                                <div class="bg-info rounded" style="width: 40px; height: 70%; margin-bottom: 10px;"></div>
                                <small>Sem 4</small>
                            </div>
                            <div class="text-center">
                                <div class="bg-secondary rounded" style="width: 40px; height: 85%; margin-bottom: 10px;"></div>
                                <small>Atual</small>
                            </div>
                        </div>
                    </div>

                    <!-- Métricas Principais -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h4 class="text-primary">87%</h4>
                                    <p class="mb-0">Taxa de Ocupação</p>
                                    <small class="text-muted">↑ 5% vs mês anterior</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h4 class="text-success">4.2h</h4>
                                    <p class="mb-0">Tempo Médio de Uso</p>
                                    <small class="text-muted">↓ 0.3h vs mês anterior</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h4 class="text-warning">12</h4>
                                    <p class="mb-0">Salas Ativas</p>
                                    <small class="text-muted">Total de 15 salas</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-light">
                                <div class="card-body text-center">
                                    <h4 class="text-info">142</h4>
                                    <p class="mb-0">Reservas este Mês</p>
                                    <small class="text-muted">↑ 18% vs mês anterior</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Seção de Relatórios Personalizados -->
            <h6 class="text-info">Gerar Relatório Personalizado</h6>
            <form class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">Tipo de Relatório</label>
                    <select class="form-select">
                        <option>Ocupação de Salas</option>
                        <option>Atividade de Usuários</option>
                        <option>Reservas por Período</option>
                        <option>Estatísticas Gerais</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Data Início</label>
                    <input type="date" class="form-control" value="2025-09-01">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Data Fim</label>
                    <input type="date" class="form-control" value="2025-09-30">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Formato</label>
                    <select class="form-select">
                        <option>PDF</option>
                        <option>Excel</option>
                        <option>CSV</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-success">
                        <i class="bi bi-file-earmark-text me-2"></i>Gerar Relatório
                    </button>
                </div>
            </form>

            <hr>

            <!-- Top 5 Salas Mais Utilizadas -->
            <h6 class="text-dark">Top 5 Salas Mais Utilizadas</h6>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead class="table-light">
                        <tr>
                            <th>Posição</th>
                            <th>Sala</th>
                            <th>Tipo</th>
                            <th>Horas de Uso</th>
                            <th>Taxa de Ocupação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="badge bg-warning">1º</span></td>
                            <td>A101</td>
                            <td>Laboratório</td>
                            <td>156h</td>
                            <td>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar bg-success" style="width: 95%">95%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-secondary">2º</span></td>
                            <td>B205</td>
                            <td>Auditório</td>
                            <td>142h</td>
                            <td>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar bg-info" style="width: 89%">89%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="badge bg-success">3º</span></td>
                            <td>C302</td>
                            <td>Informática</td>
                            <td>128h</td>
                            <td>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar bg-warning" style="width: 78%">78%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4º</td>
                            <td>D401</td>
                            <td>Sala Comum</td>
                            <td>98h</td>
                            <td>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar" style="width: 65%">65%</div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5º</td>
                            <td>E503</td>
                            <td>Laboratório</td>
                            <td>87h</td>
                            <td>
                                <div class="progress" style="height: 20px;">
                                    <div class="progress-bar bg-secondary" style="width: 58%">58%</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>