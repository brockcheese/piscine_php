SELECT COUNT(*) AS nb_susc, FLOOR(AVG(price)) AS av_sesc, SUM(duration_sub % 42) AS ft FROM subscription;
