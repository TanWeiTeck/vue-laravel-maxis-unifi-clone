<script>
    window.app = <?php echo json_encode([
        'now' => Carbon\Carbon::now()->toIso8601String(),
        'errors' => (object) (isset($errors) ? $errors->getBags() : []),
        'vuedata' => (object) app('vuedata'),
        'mixins' => [],
        'accessToken' => $accessToken ?? null,
        'user' => Auth::check() ? Auth::user() : null,
        'locale' => App::getLocale(),
    ]); ?>;
</script>
