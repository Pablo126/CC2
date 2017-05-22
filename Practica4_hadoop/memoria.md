# Cloud computing

## Servicios y aplicaciones



### Práctica 4 Computación en hadoop

> Autor: Juan Pablo González Casado

> Email: pablo12614@correo.ugr.es

> Github: https://github.com/Pablo126/CC2/

#### Preparación

Para realizar la práctica se han creado los códigos en local y se han subido por medio de FTP a la carpeta de usuario.

Una vez allí se han seguido los pasos de ejecución explicados en el tutorial (tomando como ejemplo el cálculo de mínimo):
```
mkdir java_classes
javac -cp /usr/lib/hadoop/*:/usr/lib/hadoop-mapreduce/* -d java_classes Min*
/usr/java/jdk1.7.0_51/bin/jar -cvf Min.jar -C java_classes / .
hadoop jar Min.jar oldapi.Min /tmp/BDCC/datasets/ECBDL14/ECBDL14_10tst.data ./Min/output/
hdfs dfs -cat Min/output/*
```
#### Ejercicio 1 - Mínimo
> Calcula el valor mínimo de la variable (columna) 5
```
mkdir java_classes
javac -cp /usr/lib/hadoop/*:/usr/lib/hadoop-mapreduce/* -d java_classes Min*
/usr/java/jdk1.7.0_51/bin/jar -cvf Min.jar -C java_classes / .
hadoop jar Min.jar oldapi.Min /tmp/BDCC/datasets/ECBDL14/ECBDL14_10tst.data ./Min/output/
hdfs dfs -cat Min/output/*
```
> Salida
```
[mcc15472800@hadoop-master t1]$ hdfs dfs -cat Min/output/*
Min	-11.0
```

#### Ejercicio 2 - Máximo
> Calcula el valor máximo de la variable (columna) 5
```
mkdir java_classes
javac -cp /usr/lib/hadoop/*:/usr/lib/hadoop-mapreduce/* -d java_classes Max*
/usr/java/jdk1.7.0_51/bin/jar -cvf Max.jar -C java_classes / .
hadoop jar Max.jar oldapi.Max /tmp/BDCC/datasets/ECBDL14/ECBDL14_10tst.data ./Max/output/
hdfs dfs -cat Max/output/*
```
> Salida
```
[mcc15472800@hadoop-master t2]$ hdfs dfs -cat Max/output/*
Max	9.0
```

#### Ejercicio 3 - Máximo y mínimo
> Calcula al mismo tiempo los valores máximo y mínimo de la variable 5
```
mkdir java_classes
javac -cp /usr/lib/hadoop/*:/usr/lib/hadoop-mapreduce/* -d java_classes Max*
/usr/java/jdk1.7.0_51/bin/jar -cvf Max.jar -C java_classes / .
hadoop jar Max.jar oldapi.Max /tmp/BDCC/datasets/ECBDL14/ECBDL14_10tst.data ./Max/output/
hdfs dfs -cat Max/output/*
```
> Salida
```
[mcc15472800@hadoop-master t3]$ hdfs dfs -cat MaxMin/output/*
Max	9.0
Min	-11.0
```

#### Ejercicio 4 - Máximo y mínimo de todas (menos clase)
> Calcula los valores máximo y mínimo de todas las variables (salvo la última, que es
la etiqueta de clase)
```
mkdir java_classes
javac -cp /usr/lib/hadoop/*:/usr/lib/hadoop-mapreduce/* -d java_classes MaxMinTodas*
/usr/java/jdk1.7.0_51/bin/jar -cvf MaxMinTodas.jar -C java_classes / .
hadoop jar MaxMinTodas.jar oldapi.MaxMinTodas /tmp/BDCC/datasets/ECBDL14/ECBDL14_10tst.data ./MaxMinTodas/output/
hdfs dfs -cat MaxMinTodas/output/*
```
> Salida
```
[mcc15472800@hadoop-master t4]$ hdfs dfs -cat MaxMinTodas/output/*
Max (1)	0.154
Min (1)	0.0
Max (2)	10.0
Min (2)	-12.0
Max (3)	8.0
Min (3)	-11.0
Max (4)	9.0
Min (4)	-12.0
Max (5)	9.0
Min (5)	-11.0
Max (6)	9.0
Min (6)	-13.0
Max (7)	9.0
Min (7)	-12.0
Max (8)	7.0
Min (8)	-12.0
Max (9)	10.0
Min (9)	-13.0
Max (0)	0.768
Min (0)	0.094
```

#### Ejercicio 5 - Media
> Realizar la media de la variable 5
```
mkdir java_classes
javac -cp /usr/lib/hadoop/*:/usr/lib/hadoop-mapreduce/* -d java_classes Avg*
/usr/java/jdk1.7.0_51/bin/jar -cvf Avg.jar -C java_classes / .
hadoop jar Avg.jar oldapi.Avg /tmp/BDCC/datasets/ECBDL14/ECBDL14_10tst.data ./Avg/output/
hdfs dfs -cat Avg/output/*
```
> Salida
```
[mcc15472800@hadoop-master t3]$ hdfs dfs -cat Avg/output/*
Avg -1.282261707288373
```

#### Ejercicio 6 - Media de todas las variables
> Obtener la media de todas las variables (salvo la clase)
```
mkdir java_classes
javac -cp /usr/lib/hadoop/*:/usr/lib/hadoop-mapreduce/* -d java_classes AvgTodas*
/usr/java/jdk1.7.0_51/bin/jar -cvf AvgTodas.jar -C java_classes / .
hadoop jar AvgTodas.jar oldapi.AvgTodas /tmp/BDCC/datasets/ECBDL14/ECBDL14_10tst.data ./AvgTodas/output/
hdfs dfs -cat AvgTodas/output/*
```
> Salida
```
[mcc15472800@hadoop-master t6]$ hdfs dfs -cat AvgTodas/output/*
1	0.0521277659093076
2	-2.188240380935686
3	-1.408876789776933
4	-1.7528724942777865
5	-1.282261707288373
6	-2.293434905140485
7	-1.5875789403216172
8	-1.7390052924221087
9	-1.6989002790625127
0	0.2549619599165268
```

#### Ejercicio 7 - Media
> Realizar la media de la variable 5
```
mkdir java_classes
javac -cp /usr/lib/hadoop/*:/usr/lib/hadoop-mapreduce/* -d java_classes Bal*
/usr/java/jdk1.7.0_51/bin/jar -cvf Bal.jar -C java_classes / .
hadoop jar Bal.jar oldapi.Bal /tmp/BDCC/datasets/ECBDL14/ECBDL14_10tst.data ./Bal/output/
hdfs dfs -cat Bal/output/*
```
> Salida
```
[mcc15472800@hadoop-master t7]$ hdfs dfs -cat Bal/output/*
Bal	58.582560602010815
```


#### Ejercicio 8 - Correlación
> Cálculo del coeficiente de correlación entre todas las parejas de variables5
```
mkdir java_classes
javac -cp /usr/lib/hadoop/*:/usr/lib/hadoop-mapreduce/* -d java_classes Corr*
/usr/java/jdk1.7.0_51/bin/jar -cvf Corr.jar -C java_classes / .
hadoop jar Corr.jar oldapi.Corr /tmp/BDCC/datasets/ECBDL14/ECBDL14_10tst.data ./Corr/output/
hdfs dfs -cat Corr/output/*
```
> Salida
```
[mcc15472800@hadoop-master t8]$ hdfs dfs -cat Corr/output/*
4,9	0.014041854998880898
5,8	0.015183324110128226
6,7	0.11488805268078417
5,9	0.023068393377281653
6,8	0.07783431570283235
6,9	0.1071360896407867
7,8	-0.3292179447994215
7,9	0.08936167755929571
0,1	-0.13589916860198717
8,9	0.1084960047958963
0,2	0.0914359311256993
0,3	0.07005931835306492
1,2	-0.0030364539647728924
0,4	0.04742917822207091
1,3	0.009438349434686362
0,5	0.12916572714685637
1,4	0.05885670184693512
2,3	-0.01726247486762999
0,6	0.1925251758806366
1,5	0.014659977634766102
2,4	0.018191261366109063
0,7	0.1792126656530358
1,6	-0.03183255331087574
2,5	0.024182999250758484
3,4	0.015754379166559307
0,8	0.06624560107459888
1,7	-1.7503655317161706E-5
2,6	0.041153841377462724
3,5	0.016128930425374947
0,9	0.13827089964426575
1,8	0.015894103473738444
2,7	0.03814283037771738
3,6	0.025952003813569456
4,5	0.07125079800784533
1,9	-0.01673062344385065
2,8	0.025077384911599235
3,7	0.01879122854336587
4,6	0.018264386288745375
2,9	0.027549270387458427
3,8	0.016130402799924542
4,7	0.01984291578033614
5,6	0.03200113594875155
3,9	0.01817123896585364
4,8	0.01224584385595619
5,7	0.03297998768398484
```

### Referencias

- Bibliografía de la asignatura
- Github: manuparra/fblupi/AythaE
