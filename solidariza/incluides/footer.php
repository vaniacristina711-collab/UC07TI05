<footer class="rodape-principal">
    <div class="rodape-conteudo">
        <p>&copy; <?php echo date("Y"); ?> Sodilariza. Todos os direitos reservados.</p>
        <p><small>desenvolvido para fins educacionais- turma TII05</small></p>
    </div>
</footer>
<script src="assets/js/main.js"></script>
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const menuLinks = document.querySelector('.menu-links');
 
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('ativo');
            menuLinks.classList.toggle('ativo');
        });
    </script>
</body>
</html>
 
 