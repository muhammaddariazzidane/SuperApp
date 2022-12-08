<!-- ini untuk chat help -->
<?= $this->include('help/helpchat') ?>
<!-- ini untuk end chat help -->
</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
<script>
  const setup = () => {
    return {
      loading: true,
      isSidebarOpen: false,
      toggleSidbarMenu() {
        this.isSidebarOpen = !this.isSidebarOpen
      },
      isSettingsPanelOpen: false,
      isSearchBoxOpen: false,
    }
  }
  // for chat
  const formWrapper = document.querySelector(".formbold-form-wrapper");
  const crossIcon = document.querySelector(".cross-icon");
  const chatIcon = document.querySelector(".chat-icon");

  function chatboxToogleHandler() {
    formWrapper.classList.toggle("hidden");
    crossIcon.classList.toggle("hidden");
    chatIcon.classList.toggle("hidden");
  }
</script>
</div>
</body>

</html>