<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBBTourneys.com - Coming March 1st</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "indivisible", sans-serif;
            background-color: #f5f5f5;
            color: #202121;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 2rem 0 2rem;
            display: flex;
            flex-direction: column;
        }

        .tagline {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 900;
            font-style: italic;
            text-transform: uppercase;
        }

        .logo-link {
            display: block;
            margin: 0 auto;
            transition: transform 0.3s ease-in-out;
            &:hover {
                transform: scale(1.02);
            }
        }

        .logo {
            text-align: center;
            max-width: 860px;
            margin: 0 auto;
            height: auto;
        }

        .stats {
            font-size: 1.75rem;
            font-weight: 900;
            text-transform: uppercase;
            font-style: italic;
            letter-spacing: 0.02em;
            margin-bottom: 2rem;
            text-align: center;
        }

        .features {
            
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            margin-bottom: 2.5rem;
        }

        .feature {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background-color: #202121;
            color: #fff;
            border: 2px solid #1a1a1a;
            border-radius: 50px;
            padding: 5px 12px 5px 7px;
            font-weight: 700;
            font-size: 1.1rem;
        }

        .feature img {
            width: 24px;
            height: 24px;
        }

        .description {
            max-width: 860px;
            margin: 0 auto 2rem;
            font-size: 1.1rem;
            font-weight: 500;
            line-height: 1.7;
        }

        .description p {
            margin-bottom: 1rem;
        }

        .cta-banner {
            font-family: "basset-one", sans-serif;
            background: #202121;
            border-radius: 100px;
            padding: 12px 32px;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .cta-banner img {
            width: 52px;
            height: 52px;
        }

        .cta-text {
            color: #fff;
            font-size: 28px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        @media (max-width: 600px) {
            .container {
                padding: 2rem 1rem;
            }

            .tagline {
                font-size: 1.2rem;
            }

            .stats {
                font-size: 1.25rem;
            }

            .feature {
                font-size: 0.85rem;
                padding: 5px 7px;
            }

            .description {
                font-size: 1rem;
            }

            .cta-banner {
                padding: 1rem 1.5rem;
                gap: 0.75rem;
            }

            .cta-text {
                font-size: 0.9rem;
            }

            .cta-banner img {
                width: 24px;
                height: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="tagline">Do You Know Ball?</p>

        <a class="logo-link" href="/"><img src="/wp-content/uploads/2026/02/cbb-tourneys-com-logo.png" alt="CBBTourneys.com" class="logo"></a>

        <p class="stats">31 Conferences &bull; 31 Tournaments &bull; 300 Picks</p>

        <div class="features">
            <span class="feature">
                <img src="<?php echo esc_url( NCAA_BRACKETS_PLUGIN_URL . 'assets/img/basketball.svg' ); ?>" alt="">
                Predict all 31 autobids
            </span>
            <span class="feature">
                <img src="<?php echo esc_url( NCAA_BRACKETS_PLUGIN_URL . 'assets/img/basketball.svg' ); ?>" alt="">
                Climb the leaderboard
            </span>
            <span class="feature">
                <img src="<?php echo esc_url( NCAA_BRACKETS_PLUGIN_URL . 'assets/img/basketball.svg' ); ?>" alt="">
                From the SWAC to WAC to MAC
            </span>
        </div>

        <div class="description">
            <p>From Georgetown's Big East Tournament championship as the 8 seed in 2021 to 12 seed Delaware's near miss to the dance in the CAA last year, some of the best storylines come before the NCAA Tournament.</p>
            <p>Join fellow college basketball degenerates, and make your picks for all 300 conference tournament games, starting March 1st.</p>
        </div>

        <div class="cta-banner">
            <img src="<?php echo esc_url( NCAA_BRACKETS_PLUGIN_URL . 'assets/img/bracket.svg' ); ?>" alt="">
            <span class="cta-text">Make your picks starting <span>March 1st</span> on <span>cbbtourneys.com</span></span>
            <img src="<?php echo esc_url( NCAA_BRACKETS_PLUGIN_URL . 'assets/img/bracket.svg' ); ?>" alt="">
        </div>

        <img src="/wp-content/uploads/2026/02/bracket-preview.jpg" alt="Bracket Preview" class="bracket-preview">
    </div>
</body>
</html>
