<?php
$soTwit = get_field('options_social_twitter', 'options');
$soFace = get_field('options_social_facebook', 'options');
$soLink = get_field('options_social_linkedin', 'options');
$soYou = get_field('options_social_youtube', 'options');
?>

<div class="social-links">

    <?php if ($soTwit) : ?>
        <a class="social-links__link" href="<?php echo $soTwit; ?>" target="_blank" rel="noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
                <path fill="#003" fill-rule="evenodd" d="M6.29 16c7.547 0 11.675-6.155 11.675-11.492 0-.175-.004-.35-.012-.522A8.281 8.281 0 0 0 20 1.894a8.294 8.294 0 0 1-2.356.636A4.065 4.065 0 0 0 19.448.296c-.793.462-1.671.799-2.606.98A4.13 4.13 0 0 0 13.847 0c-2.266 0-4.104 1.809-4.104 4.039 0 .317.036.625.107.92A11.712 11.712 0 0 1 1.392.74a3.977 3.977 0 0 0-.556 2.03 4.02 4.02 0 0 0 1.826 3.363 4.122 4.122 0 0 1-1.858-.505l-.001.051c0 1.957 1.414 3.59 3.292 3.96a4.177 4.177 0 0 1-1.853.07c.522 1.604 2.037 2.772 3.833 2.805A8.318 8.318 0 0 1 .98 14.242 8.5 8.5 0 0 1 0 14.186 11.75 11.75 0 0 0 6.29 16" />
            </svg>
        </a>
    <?php endif; ?>

    <?php if ($soFace) : ?>
        <a class="social-links__link" href="<?php echo $soFace; ?>" target="_blank" rel="noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="22" viewBox="0 0 11 22">
                <path fill="#003" fill-rule="evenodd" d="M7.141 22V11.965h3.242l.486-3.913H7.14V5.557c0-1.132.303-1.905 1.866-1.905H11V.153A26.308 26.308 0 0 0 8.095 0C5.22 0 3.25 1.822 3.25 5.169v2.883H0v3.913h3.25V22H7.14Z" />
            </svg>
        </a>
    <?php endif; ?>

    <?php if ($soLink) : ?>
        <a class="social-links__link" href="<?php echo $soLink; ?>" target="_blank" rel="noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19">
                <path fill="#003" fill-rule="evenodd" d="M4.342 6.18v12.644H0V6.179h4.342ZM15 5.881c2.858 0 5 1.808 5 5.691v7.25h-4.342V12.06c0-1.7-.628-2.86-2.2-2.86-1.2 0-1.913.782-2.227 1.538-.115.27-.144.647-.144 1.025v7.062H6.743v-.096l.001-.072.001-.2c.005-1.064.02-4.25.023-7.122v-.632l.001-.31v-.9c-.001-1.645-.008-2.952-.026-3.313h4.343v1.793c.577-.86 1.608-2.09 3.914-2.09ZM2.353 0a2.353 2.353 0 1 1 0 4.706 2.353 2.353 0 0 1 0-4.706Z" />
            </svg>
        </a>
    <?php endif; ?>

    <?php if ($soYou) : ?>
        <a class="social-links__link" href="<?php echo $soYou; ?>" target="_blank" rel="noopener">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" viewBox="0 0 20 14">
                <path fill="#000032" fill-rule="nonzero" d="M19.59 2.186A2.514 2.514 0 0 0 17.826.423C16.266 0 10 0 10 0S3.74 0 2.174.41A2.571 2.571 0 0 0 .409 2.185C0 3.752 0 6.996 0 6.996s0 3.259.41 4.81c.232.854.903 1.531 1.764 1.764C3.754 14 10 14 10 14s6.26 0 7.826-.41a2.514 2.514 0 0 0 1.764-1.762c.41-1.566.41-4.81.41-4.81s.02-3.266-.41-4.832ZM8.01 9.994V3.999l5.208 2.997L8.01 9.994Z" />
            </svg>
        </a>
    <?php endif; ?>

</div>