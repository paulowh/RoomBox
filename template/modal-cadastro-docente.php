<div class="modal fade" id="modalDocente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalDocenteLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <div class="d-flex align-items-center">
                    <i class="bi bi-person-badge-fill me-2"></i>
                    <h1 class="modal-title fs-5 mb-0" id="modalDocenteLabel">Novo Docente</h1>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body p-4">
                <div class="mb-3">
                    <p class="text-muted mb-0">Preencha as informações abaixo para cadastrar um novo docente</p>
                </div>

                <form action="./docente-cadastro.php" method="POST" id="form-docente-cadastro">
                    <div class="row g-3">
                        <!-- Campo Nome -->
                        <div class="col-12">
                            <label for="nome-docente" class="form-label fw-semibold">
                                <i class="bi bi-person me-2 text-info"></i>Nome Completo
                            </label>
                            <input type="text" 
                                   class="form-control form-control-lg" 
                                   placeholder="Ex: João Silva Santos" 
                                   name="txtNome" 
                                   id="nome-docente"
                                   required>
                        </div>

                        <!-- Campo RA -->
                        <div class="col-md-6">
                            <label for="ra-docente" class="form-label fw-semibold">
                                <i class="bi bi-card-text me-2 text-primary"></i>RA do Docente
                            </label>
                            <input type="text" 
                                   class="form-control form-control-lg" 
                                   placeholder="Ex: 1234567" 
                                   name="txtRA" 
                                   id="ra-docente"
                                   maxlength="7"
                                   pattern="[0-9]{7}"
                                   required>
                        </div>

                        <!-- Campo Área -->
                        <div class="col-md-6">
                            <label for="area-docente" class="form-label fw-semibold">
                                <i class="bi bi-mortarboard me-2 text-success"></i>Área de Atuação
                            </label>
                            <select id="area-docente" name="txtArea" class="form-select form-select-lg" required>
                                <option value="" selected disabled>Selecione a área</option>
                                <option value="Tecnologia da Informação">💻 Tecnologia da Informação</option>
                                <option value="Enfermagem">🏥 Enfermagem</option>
                                <option value="Moda">👗 Moda</option>
                                <option value="Design">🎨 Design</option>
                                <option value="Administração">📊 Administração</option>
                                <option value="Contabilidade">💰 Contabilidade</option>
                                <option value="Recursos Humanos">👥 Recursos Humanos</option>
                                <option value="Marketing">📱 Marketing</option>
                                <option value="Logística">🚛 Logística</option>
                            </select>
                        </div>

                        <!-- Campo Observações (opcional) -->
                        <div class="col-12">
                            <label for="observacoes-docente" class="form-label fw-semibold">
                                <i class="bi bi-chat-text me-2 text-secondary"></i>Observações
                                <small class="text-muted">(opcional)</small>
                            </label>
                            <textarea class="form-control" 
                                      id="observacoes-docente" 
                                      name="observacoes" 
                                      rows="3" 
                                      placeholder="Adicione informações adicionais sobre o docente..."></textarea>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="modal-footer bg-light p-3">
                <div class="d-flex gap-2 w-100 justify-content-end">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-2"></i>Cancelar
                    </button>
                    <button type="submit" class="btn btn-info" form="form-docente-cadastro">
                        <i class="bi bi-check-circle me-2"></i>Cadastrar Docente
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>