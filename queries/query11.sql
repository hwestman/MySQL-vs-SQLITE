   BEGIN;

                INSERT INTO t1 SELECT b,a,c FROM t2;

                INSERT INTO t2 SELECT b,a,c FROM t1;

                COMMIT;