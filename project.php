<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    require_once __DIR__ . '/includes/db.php';

    $id      = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    $project = null;
    $error   = null;

    if ($id <= 0) {
        $error = 'Project tidak ditemukan.';
    } else {
        try {
            $pdo  = getDB();
            $stmt = $pdo->prepare(
                'SELECT id, title, thumbnail, demo_link, project_date FROM projects WHERE id = :id LIMIT 1'
            );
            $stmt->execute([':id' => $id]);
            $project = $stmt->fetch();
            if (!$project) {
                $error = 'Project tidak ditemukan.';
            }
        } catch (PDOException $e) {
            $error = 'Terjadi kesalahan. Silakan coba lagi.';
        }
    }

    $title = $project ? htmlspecialchars($project['title']) : 'Project Not Found';
    $desc  = $project ? 'Detail project: ' . $title . ' — Faydev' : 'Project tidak ditemukan.';
    ?>

    <title><?= $title ?> — Faydev</title>
    <meta name="description" content="<?= $desc ?>">
    <meta name="robots" content="noindex">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;1,9..40,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
</head>
<body>

<nav class="navbar scrolled" id="navbar">
    <div class="nav-container">
        <a href="index.php" class="nav-logo">
            <span class="logo-bracket">[</span>faydev<span class="logo-bracket">]</span>
        </a>
        <div class="nav-actions">
            <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
                <span class="toggle-icon toggle-sun"><i class="fas fa-sun"></i></span>
                <span class="toggle-icon toggle-moon"><i class="fas fa-moon"></i></span>
            </button>
        </div>
    </div>
</nav>

<main class="project-detail-page">
    <div class="container">

        <!-- Back link -->
        <a href="index.php#projects" class="back-link reveal-up">
            <i class="fas fa-arrow-left"></i>
            Kembali ke Projects
        </a>

        <?php if ($error): ?>
        <div class="detail-error reveal-up">
            <div class="error-icon"><i class="fas fa-folder-open"></i></div>
            <h1>404</h1>
            <p><?= htmlspecialchars($error) ?></p>
            <a href="index.php" class="btn btn--primary">Kembali ke Home</a>
        </div>
        <?php else: ?>

        <article class="detail-card reveal-up">
            <!-- Thumbnail -->
            <div class="detail-thumb">
                <img src="<?= htmlspecialchars($project['thumbnail']) ?>"
                     alt="<?= htmlspecialchars($project['title']) ?>"
                     onerror="this.src='assets/images/project-placeholder.svg'">
            </div>

            <!-- Meta -->
            <div class="detail-body">
                <div class="detail-meta">
                    <span class="section-tag">// project</span>
                    <span class="detail-date">
                        <i class="fas fa-calendar-alt"></i>
                        <?php
                        $d = new DateTime($project['project_date']);
                        echo $d->format('d F Y');
                        ?>
                    </span>
                </div>

                <h1 class="detail-title"><?= htmlspecialchars($project['title']) ?></h1>

                <div class="detail-actions">
                    <?php if ($project['demo_link']): ?>
                    <a href="<?= htmlspecialchars($project['demo_link']) ?>"
                       class="btn btn--primary"
                       target="_blank"
                       rel="noopener">
                        <i class="fas fa-external-link-alt"></i>
                        View Demo
                    </a>
                    <?php endif; ?>
                    <a href="https://wa.me/6281234567890?text=Halo%20Faris%2C%20saya%20tertarik%20dengan%20project%20<?= urlencode($project['title']) ?>%20dan%20ingin%20diskusi%20lebih%20lanjut."
                       class="btn btn--whatsapp"
                       target="_blank"
                       rel="noopener">
                        <i class="fab fa-whatsapp"></i>
                        Diskusi Project Ini
                    </a>
                </div>
            </div>
        </article>

        <!-- CTA -->
        <div class="detail-cta reveal-up" style="--delay:.2s">
            <p>Tertarik dengan project serupa untuk bisnis Anda?</p>
            <a href="index.php#contact" class="btn btn--outline">
                <i class="fas fa-comments"></i>
                Hubungi Saya
            </a>
        </div>

        <?php endif; ?>
    </div>
</main>

<footer class="footer">
    <div class="container">
        <div class="footer-bottom" style="border-top:none; padding-top:0">
            <p>&copy; <?= date('Y') ?> Faris AY — Faydev. Crafted with <i class="fas fa-heart"></i> in Indonesia.</p>
        </div>
    </div>
</footer>

<style>
.project-detail-page {
    padding: 8rem 0 5rem;
    min-height: 80svh;
}

.back-link {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    font-size: .875rem;
    font-weight: 500;
    color: var(--txt-muted);
    margin-bottom: 2.5rem;
    transition: color var(--trans-fast), gap var(--trans-fast);
}
.back-link:hover { color: var(--txt-accent); gap: .7rem; }

.detail-card {
    background: var(--card-bg);
    border: 1px solid var(--card-border);
    border-radius: var(--radius-xl);
    overflow: hidden;
    max-width: 760px;
    margin-bottom: 2.5rem;
}

.detail-thumb {
    width: 100%;
    aspect-ratio: 16/9;
    background: var(--bg-elevated);
    overflow: hidden;
}
.detail-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.detail-body {
    padding: 2rem 2rem 2.5rem;
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}

.detail-meta {
    display: flex;
    align-items: center;
    gap: 1.25rem;
    flex-wrap: wrap;
}

.detail-date {
    font-size: .8rem;
    color: var(--txt-muted);
    display: flex;
    align-items: center;
    gap: .4rem;
    font-family: monospace;
}

.detail-title {
    font-size: clamp(1.5rem, 3vw, 2.2rem);
    font-weight: 800;
    letter-spacing: -.03em;
    line-height: 1.2;
}

.detail-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-top: .5rem;
}

.detail-cta {
    display: flex;
    align-items: center;
    gap: 1.25rem;
    flex-wrap: wrap;
    padding: 1.5rem 2rem;
    background: var(--bg-elevated);
    border: 1px solid var(--bg-border);
    border-radius: var(--radius-lg);
    max-width: 760px;
}
.detail-cta p {
    flex: 1;
    font-size: .95rem;
    color: var(--txt-secondary);
    min-width: 200px;
}

.detail-error {
    text-align: center;
    padding: 5rem 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
}
.error-icon { font-size: 3rem; color: var(--txt-muted); }
.detail-error h1 { font-size: 5rem; color: var(--txt-accent); }
.detail-error p  { color: var(--txt-secondary); }

@media (max-width: 600px) {
    .detail-body { padding: 1.5rem; }
    .detail-actions .btn { flex: 1; justify-content: center; }
}
</style>

<script src="assets/js/main.js"></script>
</body>
</html>
