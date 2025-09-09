<div class="modal fade" id="modalTurma" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTurmaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <div class="d-flex align-items-center">
                    <i class="bi bi-people-fill me-2"></i>
                    <h1 class="modal-title fs-5 mb-0" id="modalTurmaLabel">Nova Turma</h1>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body p-4">
                <div class="mb-3">
                    <p class="text-muted mb-0">Preencha as informações abaixo para cadastrar uma nova turma</p>
                </div>

                <form action="./turma-cadastro.php" method="POST" id="form-turma-cadastro">
                    <div class="row g-3">
                        <!-- Campo Nome -->
                        <div class="col-12">
                            <label for="nome-turma" class="form-label fw-semibold">
                                <i class="bi bi-people me-2 text-success"></i>Nome da Turma
                            </label>
                            <input type="text" 
                                   class="form-control form-control-lg" 
                                   placeholder="Ex: Técnico em Informática 2024" 
                                   name="txtNome" 
                                   id="nome-turma"
                                   required>
                        </div>

                        <!-- Campo Sigla -->
                        <div class="col-md-6">
                            <label for="sigla-turma" class="form-label fw-semibold">
                                <i class="bi bi-tag me-2 text-primary"></i>Sigla
                            </label>
                            <input type="text" 
                                   class="form-control form-control-lg" 
                                   placeholder="Ex: TI24" 
                                   name="txtSigla" 
                                   id="sigla-turma"
                                   maxlength="8"
                                   style="text-transform: uppercase;"
                                   required>
                        </div>

                        <!-- Campo Período -->
                        <div class="col-md-6">
                            <label for="periodo-turma" class="form-label fw-semibold">
                                <i class="bi bi-clock me-2 text-warning"></i>Período
                            </label>
                            <select id="periodo-turma" name="txtPeriodo" class="form-select form-select-lg" required>
                                <option value="" selected disabled>Selecione o período</option>
                                <option value="manha">🌅 Manhã (07:00 - 12:00)</option>
                                <option value="tarde">☀️ Tarde (13:00 - 18:00)</option>
                                <option value="noite">🌙 Noite (19:00 - 22:00)</option>
                                <option value="integral">🕐 Integral</option>
                            </select>
                        </div>

                        <!-- Campo Quantidade de Alunos -->
                        <div class="col-md-6">
                            <label for="quant-alunos" class="form-label fw-semibold">
                                <i class="bi bi-person-check me-2 text-info"></i>Quantidade de Alunos
                            </label>
                            <input type="number" 
                                   class="form-control form-control-lg" 
                                   placeholder="Ex: 30" 
                                   name="txtQuantAlunos" 
                                   id="quant-alunos"
                                   min="1"
                                   max="50"
                                   value="0"
                                   required>
                        </div>

                        <!-- Campo Observações (opcional) -->
                        <div class="col-12">
                            <label for="observacoes-turma" class="form-label fw-semibold">
                                <i class="bi bi-chat-text me-2 text-secondary"></i>Observações
                                <small class="text-muted">(opcional)</small>
                            </label>
                            <textarea class="form-control" 
                                      id="observacoes-turma" 
                                      name="observacoes" 
                                      rows="3" 
                                      placeholder="Adicione informações adicionais sobre a turma..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer bg-light p-3">
                <div class="d-flex gap-2 w-100 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-2"></i>Cancelar
                    </button>
                    <button type="submit" class="btn btn-success" form="form-turma-cadastro">
                        <i class="bi bi-check-circle me-2"></i>Cadastrar Turma
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>