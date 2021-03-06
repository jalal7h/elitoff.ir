
CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=1949 DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci COMMENT='region/city/state/coutry/continent';


INSERT INTO `position` (`id`, `name`, `parent`, `type`) VALUES
(1001, 'آبش احمد', 101, 'city'),
(1004, 'تنکابن', 102, 'city'),
(1018, 'آذر شهر', 101, 'city'),
(1019, 'اسکو', 101, 'city'),
(1020, 'آقکند', 101, 'city'),
(1021, 'اهر', 101, 'city'),
(1022, 'ایلخچی', 101, 'city'),
(1023, 'احمد سر گوراب', 136, 'city'),
(1024, 'اسالم', 136, 'city'),
(1025, 'آستارا', 136, 'city'),
(1090, 'آستانه اشرفیه', 136, 'city'),
(1027, 'باسمنج', 101, 'city'),
(1028, 'بخشایش', 101, 'city'),
(1029, 'بستان آباد', 101, 'city'),
(1030, 'بناب', 101, 'city'),
(1031, 'تبریز', 101, 'city'),
(1032, 'ترک', 101, 'city'),
(1033, 'ترکمنچای', 101, 'city'),
(1034, 'تسوج', 101, 'city'),
(1035, 'تیکمه داش', 101, 'city'),
(1036, 'جلفا', 101, 'city'),
(1037, 'خاروانا', 101, 'city'),
(1038, 'خامنه', 101, 'city'),
(1039, 'خراجو', 101, 'city'),
(1040, 'خسروشهر', 101, 'city'),
(1041, 'خمارلو', 101, 'city'),
(1042, 'خواجه', 101, 'city'),
(1043, 'دوزدوزان', 101, 'city'),
(1044, 'زرنق', 101, 'city'),
(1045, 'زنوز', 101, 'city'),
(1046, 'سراب', 101, 'city'),
(1047, 'سردرود', 101, 'city'),
(1048, 'سیس', 101, 'city'),
(1049, 'سیه رود', 101, 'city'),
(1050, 'شبستر', 101, 'city'),
(1051, 'شربیان', 101, 'city'),
(1052, 'شرفخانه', 101, 'city'),
(1053, 'شندآباد', 101, 'city'),
(1054, 'صوفیان', 101, 'city'),
(1055, 'عجب شیر', 101, 'city'),
(1056, 'قره آغاج', 101, 'city'),
(1057, 'کشک سرای', 101, 'city'),
(1058, 'کلوانق', 101, 'city'),
(1059, 'کلیبر', 101, 'city'),
(1060, 'کوزه کنان', 101, 'city'),
(1061, 'گوگان', 101, 'city'),
(1062, 'لیلان', 101, 'city'),
(1063, 'مراغه', 101, 'city'),
(1064, 'مرند', 101, 'city'),
(1065, 'ملکان', 101, 'city'),
(1066, 'ممقان', 101, 'city'),
(1067, 'مهربان', 101, 'city'),
(1068, 'میانه', 101, 'city'),
(1069, 'وایقان', 101, 'city'),
(1070, 'ورزقان', 101, 'city'),
(1071, 'هادی شهر', 101, 'city'),
(1072, 'هریس', 101, 'city'),
(1073, 'هشترود', 101, 'city'),
(1074, 'هوراند', 101, 'city'),
(1075, 'یامچی', 101, 'city'),
(1076, 'ارومیه', 114, 'city'),
(1077, 'اشنویه', 114, 'city'),
(1078, 'بوکان', 114, 'city'),
(1079, 'پیرانشهر', 114, 'city'),
(1080, 'تکاب', 114, 'city'),
(1081, 'خوی', 114, 'city'),
(1082, 'چالدران', 114, 'city'),
(1083, 'سردشت', 114, 'city'),
(1084, 'سلماس', 114, 'city'),
(1085, 'شاهین دژ', 114, 'city'),
(1086, 'ماکو', 114, 'city'),
(1087, 'مهاباد', 114, 'city'),
(1088, 'میاندوآب', 114, 'city'),
(1089, 'نقده', 114, 'city'),
(1091, 'اطاقور', 136, 'city'),
(1092, 'املش', 136, 'city'),
(1093, 'بازار جمعه', 136, 'city'),
(1094, 'بره سر', 136, 'city'),
(1095, 'بندر انزلی', 136, 'city'),
(1096, 'پره سر', 136, 'city'),
(1097, 'توتکابن', 136, 'city'),
(1098, 'جیرنده', 136, 'city'),
(1099, 'چابکسر', 136, 'city'),
(1100, 'حویق', 136, 'city'),
(1101, 'خشکبیجار', 136, 'city'),
(1102, 'دیلمان', 136, 'city'),
(1103, 'رانکوه', 136, 'city'),
(1104, 'رحیم آباد', 136, 'city'),
(1105, 'رستم آباد', 136, 'city'),
(1106, 'رضوانشهر', 136, 'city'),
(1107, 'رودبار', 136, 'city'),
(1108, 'رودسر', 136, 'city'),
(1109, 'رودبنه', 136, 'city'),
(1110, 'سنگر', 136, 'city'),
(1111, 'سیاهکل', 136, 'city'),
(1112, 'شفت', 136, 'city'),
(1113, 'شلمان', 136, 'city'),
(1114, 'لاهیجان', 136, 'city'),
(1115, 'لشت نشا', 136, 'city'),
(1116, 'لنگرود', 136, 'city'),
(1117, 'لوشان', 136, 'city'),
(1118, 'لوندویل', 136, 'city'),
(1119, 'لیسار', 136, 'city'),
(1120, 'ماسال', 136, 'city'),
(1121, 'ماسوله', 136, 'city'),
(1122, 'مرجقل', 136, 'city'),
(1123, 'منجیل', 136, 'city'),
(1124, 'واجارگاه', 136, 'city'),
(1125, 'هشتپر', 136, 'city'),
(1126, 'ازنا', 137, 'city'),
(1127, 'اشترینان', 137, 'city'),
(1128, 'الشتر', 137, 'city'),
(1129, 'الیگودرز', 137, 'city'),
(1130, 'بروجرد', 137, 'city'),
(1131, 'پل دختر', 137, 'city'),
(1132, 'چالانچولان', 137, 'city'),
(1133, 'چغلوندی', 137, 'city'),
(1134, 'چقابل', 137, 'city'),
(1135, 'خرم آباد', 137, 'city'),
(1136, 'دورود', 137, 'city'),
(1137, 'زاغه', 137, 'city'),
(1138, 'سپید دشت', 137, 'city'),
(1139, 'سراب دوره', 137, 'city'),
(1140, 'فیروز آباد', 137, 'city'),
(1141, 'کونانی', 137, 'city'),
(1142, 'کوهدشت', 137, 'city'),
(1143, 'گراب', 137, 'city'),
(1144, 'محمودوند', 137, 'city'),
(1145, 'معمولان', 137, 'city'),
(1146, 'مومن آباد', 137, 'city'),
(1147, 'نور آباد', 137, 'city'),
(1148, 'آلاشت', 138, 'city'),
(1149, 'آمل', 138, 'city'),
(1150, 'امیر کلا', 138, 'city'),
(1151, 'بابل', 138, 'city'),
(1152, 'بابلسر', 138, 'city'),
(1153, 'بلده', 138, 'city'),
(1154, 'بهشهر', 138, 'city'),
(1155, 'بهنمیر', 138, 'city'),
(1156, 'پل سفید', 138, 'city'),
(1157, 'تنکابن', 138, 'city'),
(1158, 'جویبار', 138, 'city'),
(1159, 'چالوس', 138, 'city'),
(1160, 'چمستان', 138, 'city'),
(1161, 'خرم آباد', 138, 'city'),
(1162, 'خوش رودپی', 138, 'city'),
(1163, 'رامسر', 138, 'city'),
(1164, 'رستمکلا', 138, 'city'),
(1165, 'رویان', 138, 'city'),
(1166, 'رینه', 138, 'city'),
(1167, 'زرگرمحله', 138, 'city'),
(1168, 'زیرآب', 138, 'city'),
(1169, 'ساری', 138, 'city'),
(1170, 'سرخ رود', 138, 'city'),
(1171, 'سلمان شهر', 138, 'city'),
(1172, 'سورک', 138, 'city'),
(1173, 'شیرگاه', 138, 'city'),
(1174, 'عباس آباد', 138, 'city'),
(1175, 'فریدون کنار', 138, 'city'),
(1176, 'قائم شهر', 138, 'city'),
(1177, 'کتالم و سادات شهر', 138, 'city'),
(1178, 'کلارآباد', 138, 'city'),
(1179, 'کلاردشت', 138, 'city'),
(1180, 'کله بست', 138, 'city'),
(1181, 'کوهی خیل', 138, 'city'),
(1182, 'کیاسر', 138, 'city'),
(1183, 'کیاکلا', 138, 'city'),
(1184, 'گزنک', 138, 'city'),
(1185, 'گلوگاه ( بهشهر )', 138, 'city'),
(1186, 'گلوگاه', 138, 'city'),
(1187, 'محمود آباد', 138, 'city'),
(1188, 'مرزیکلا', 138, 'city'),
(1189, 'نشتارود', 138, 'city'),
(1190, 'نکا', 138, 'city'),
(1191, 'نور', 138, 'city'),
(1192, 'نوشهر', 138, 'city'),
(1193, 'اراک', 139, 'city'),
(1194, 'آستانه', 139, 'city'),
(1195, 'آشتیان', 139, 'city'),
(1196, 'تفرش', 139, 'city'),
(1197, 'توره', 139, 'city'),
(1198, 'خمین', 139, 'city'),
(1199, 'خنداب', 139, 'city'),
(1200, 'داود آباد', 139, 'city'),
(1201, 'دلیجان', 139, 'city'),
(1202, 'رازقان', 139, 'city'),
(1203, 'زاویه', 139, 'city'),
(1204, 'ساوه', 139, 'city'),
(1205, 'سنجان', 139, 'city'),
(1206, 'شازند', 139, 'city'),
(1207, 'غرق آباد', 139, 'city'),
(1208, 'فرمهین', 139, 'city'),
(1209, 'قورچی باشی', 139, 'city'),
(1210, 'کرهرود', 139, 'city'),
(1211, 'کمیجان', 139, 'city'),
(1212, 'ماُمونیه', 139, 'city'),
(1213, 'محلات', 139, 'city'),
(1214, 'میلاجرد', 139, 'city'),
(1215, 'نراق', 139, 'city'),
(1216, 'نوبران', 139, 'city'),
(1217, 'نیمور', 139, 'city'),
(1218, 'هندودر', 139, 'city'),
(1219, 'ابوموسی', 140, 'city'),
(1220, 'بستک', 140, 'city'),
(1221, 'بندر چارک', 140, 'city'),
(1222, 'بندر خمیر', 140, 'city'),
(1223, 'بندر عباس', 140, 'city'),
(1224, 'بندر لنگه', 140, 'city'),
(1225, 'جاسک', 140, 'city'),
(1226, 'جناح', 140, 'city'),
(1227, 'حاجی آباد', 140, 'city'),
(1228, 'دهبارز', 140, 'city'),
(1229, 'سوزا', 140, 'city'),
(1230, 'سیریک', 140, 'city'),
(1231, 'فین', 140, 'city'),
(1232, 'قشم', 140, 'city'),
(1233, 'کنگ', 140, 'city'),
(1234, 'کیش', 140, 'city'),
(1235, 'گاوبندی', 140, 'city'),
(1236, 'هرمز', 140, 'city'),
(1237, 'میناب', 140, 'city'),
(1238, 'ازندریان', 141, 'city'),
(1239, 'اسدآباد', 141, 'city'),
(1240, 'بهار', 141, 'city'),
(1241, 'تویسرکان', 141, 'city'),
(1242, 'جورقان', 141, 'city'),
(1243, 'جوکار', 141, 'city'),
(1244, 'دمق', 141, 'city'),
(1245, 'رزن', 141, 'city'),
(1246, 'سامن', 141, 'city'),
(1247, 'سرکان', 141, 'city'),
(1248, 'شیرین سو', 141, 'city'),
(1249, 'صالح آباد', 141, 'city'),
(1250, 'فامنین', 141, 'city'),
(1251, 'فرسفج', 141, 'city'),
(1252, 'فیروزان', 141, 'city'),
(1253, 'قروه درجزین', 141, 'city'),
(1254, 'قهاوند', 141, 'city'),
(1255, 'کبودرآهنگ', 141, 'city'),
(1256, 'گل تپه', 141, 'city'),
(1257, 'لالجین', 141, 'city'),
(1258, 'مریانج', 141, 'city'),
(1259, 'ملایر', 141, 'city'),
(1260, 'نهاوند', 141, 'city'),
(1261, 'همدان', 141, 'city'),
(1262, 'ابرکوه', 142, 'city'),
(1263, 'احمدآباد', 142, 'city'),
(1264, 'اردکان', 142, 'city'),
(1265, 'اشکذر', 142, 'city'),
(1266, 'بافق', 142, 'city'),
(1267, 'بهاباد', 142, 'city'),
(1268, 'تفت', 142, 'city'),
(1269, 'حمیدیا', 142, 'city'),
(1270, 'خضرآباد', 142, 'city'),
(1271, 'زارچ', 142, 'city'),
(1272, 'شاهدیه', 142, 'city'),
(1273, 'شواز', 142, 'city'),
(1274, 'طبس', 142, 'city'),
(1275, 'عشق آباد', 142, 'city'),
(1276, 'مروست', 142, 'city'),
(1277, 'مهردشت', 142, 'city'),
(1278, 'مهریز', 142, 'city'),
(1279, 'میبد', 142, 'city'),
(1280, 'ندوشن', 142, 'city'),
(1281, 'نیر', 142, 'city'),
(1282, 'هرات', 142, 'city'),
(1283, 'یزد', 142, 'city'),
(1284, 'آزادشهر', 135, 'city'),
(1285, 'آق قلا', 135, 'city'),
(1286, 'انبار آلوم', 135, 'city'),
(1287, 'اینچه برون', 135, 'city'),
(1288, 'بندر ترکمن', 135, 'city'),
(1289, 'بندر گز', 135, 'city'),
(1290, 'خان ببین', 135, 'city'),
(1291, 'دلند', 135, 'city'),
(1292, 'رامیان', 135, 'city'),
(1293, 'سرخنکلاته', 135, 'city'),
(1294, 'سیمین شهر', 135, 'city'),
(1295, 'علی آباد', 135, 'city'),
(1296, 'فاضل آباد', 135, 'city'),
(1297, 'کرد کوی', 135, 'city'),
(1298, 'کلاله', 135, 'city'),
(1299, 'گالیکش', 135, 'city'),
(1300, 'گرگان', 135, 'city'),
(1301, 'گمیش تپه', 135, 'city'),
(1302, 'گنبد کاووس', 135, 'city'),
(1303, 'مراوه تپه', 135, 'city'),
(1304, 'مینو دشت', 135, 'city'),
(1305, 'نوده خاندوز', 135, 'city'),
(1306, 'نوکنده', 135, 'city'),
(1307, 'باشت', 134, 'city'),
(1308, 'چرام', 134, 'city'),
(1309, 'دهدشت', 134, 'city'),
(1310, 'دوگنبدان', 134, 'city'),
(1311, 'دیشموک', 134, 'city'),
(1312, 'سوق', 134, 'city'),
(1313, 'سی سخت', 134, 'city'),
(1314, 'قلعه رئیسی', 134, 'city'),
(1315, 'گراب سفلی', 134, 'city'),
(1316, 'لنده', 134, 'city'),
(1317, 'لیکک', 134, 'city'),
(1318, 'مارگون', 134, 'city'),
(1319, 'یاسوج', 134, 'city'),
(1320, 'آبی بیگلو', 115, 'city'),
(1321, 'اردبیل', 115, 'city'),
(1322, 'اصلاندوز', 115, 'city'),
(1323, 'بیله سوار', 115, 'city'),
(1324, 'پارس آباد', 115, 'city'),
(1325, 'تازه کند انگوت', 115, 'city'),
(1326, 'جعفر آباد', 115, 'city'),
(1327, 'خلخال', 115, 'city'),
(1328, 'رضی', 115, 'city'),
(1329, 'سرعین', 115, 'city'),
(1330, 'عنبران', 115, 'city'),
(1331, 'کلور', 115, 'city'),
(1332, 'گرمی', 115, 'city'),
(1333, 'گیوی', 115, 'city'),
(1334, 'لاهرود', 115, 'city'),
(1335, 'مشکین شهر', 115, 'city'),
(1336, 'نمین', 115, 'city'),
(1337, 'نیر', 115, 'city'),
(1338, 'هشتجین', 115, 'city'),
(1339, 'هیر', 115, 'city'),
(1340, 'ابریشم', 116, 'city'),
(1341, 'ابوزیدآباد', 116, 'city'),
(1342, 'آران و بیدگل', 116, 'city'),
(1343, 'اردستان', 116, 'city'),
(1344, 'اژیه', 116, 'city'),
(1345, 'اصفهان', 116, 'city'),
(1346, 'افوس', 116, 'city'),
(1347, 'انارک', 116, 'city'),
(1348, 'ایمان شهر', 116, 'city'),
(1349, 'بادرود', 116, 'city'),
(1350, 'باغ بهادران', 116, 'city'),
(1351, 'برزک', 116, 'city'),
(1352, 'برف انبار', 116, 'city'),
(1353, 'بهاران شهر', 116, 'city'),
(1354, 'بهارستان', 116, 'city'),
(1355, 'بوئین و میاندشت', 116, 'city'),
(1356, 'پیربکران', 116, 'city'),
(1357, 'تودشک', 116, 'city'),
(1358, 'تیران', 116, 'city'),
(1359, 'جندق', 116, 'city'),
(1360, 'جوشقان و کامو', 116, 'city'),
(1361, 'چادگان', 116, 'city'),
(1362, 'چرمهین', 116, 'city'),
(1363, 'چم گردان', 116, 'city'),
(1364, 'حبیب آباد', 116, 'city'),
(1365, 'حسن آباد', 116, 'city'),
(1366, 'حنا', 116, 'city'),
(1367, 'خمینی شهر', 116, 'city'),
(1368, 'خوانسار', 116, 'city'),
(1369, 'خور', 116, 'city'),
(1370, 'خوراسگان', 116, 'city'),
(1371, 'خورزوق', 116, 'city'),
(1372, 'داران', 116, 'city'),
(1373, 'دامنه', 116, 'city'),
(1374, 'درچه پیاز', 116, 'city'),
(1375, 'دستگرد', 116, 'city'),
(1376, 'دهاقان', 116, 'city'),
(1377, 'دهق', 116, 'city'),
(1378, 'دولت آباد', 116, 'city'),
(1379, 'دیزیچه', 116, 'city'),
(1380, 'رزوه', 116, 'city'),
(1381, 'رضوان شهر', 116, 'city'),
(1382, 'زاینده رود', 116, 'city'),
(1383, 'زرین شهر', 116, 'city'),
(1384, 'زواره', 116, 'city'),
(1385, 'زیباشهر', 116, 'city'),
(1386, 'سده لنجان', 116, 'city'),
(1387, 'سفید شهر', 116, 'city'),
(1388, 'سگزی', 116, 'city'),
(1389, 'سمیرم', 116, 'city'),
(1390, 'شاهین شهر', 116, 'city'),
(1391, 'شهرضا', 116, 'city'),
(1392, 'طالخونچه', 116, 'city'),
(1393, 'عسگران', 116, 'city'),
(1394, 'علویجه', 116, 'city'),
(1395, 'فریدون شهر', 116, 'city'),
(1396, 'فلاورجان', 116, 'city'),
(1397, 'فولادشهر', 116, 'city'),
(1398, 'قمصر', 116, 'city'),
(1399, 'قهدریجان', 116, 'city'),
(1400, 'کاشان', 116, 'city'),
(1401, 'کرکوند', 116, 'city'),
(1402, 'کلیشاد و سودرجان', 116, 'city'),
(1403, 'کمشجه', 116, 'city'),
(1404, 'کمه', 116, 'city'),
(1405, 'کهریزسنگ', 116, 'city'),
(1406, 'کوشک', 116, 'city'),
(1407, 'کوهپایه', 116, 'city'),
(1408, 'گز', 116, 'city'),
(1409, 'گلپایگان', 116, 'city'),
(1410, 'گل دشت', 116, 'city'),
(1411, 'گل شهر', 116, 'city'),
(1412, 'گوگد', 116, 'city'),
(1413, 'مبارکه', 116, 'city'),
(1414, 'محمدآباد', 116, 'city'),
(1415, 'منظریه', 116, 'city'),
(1416, 'مهاباد', 116, 'city'),
(1417, 'میمه', 116, 'city'),
(1418, 'نائین', 116, 'city'),
(1419, 'نجف آباد', 116, 'city'),
(1420, 'نصر آباد', 116, 'city'),
(1421, 'نطنز', 116, 'city'),
(1422, 'نوش آباد', 116, 'city'),
(1423, 'نیاسر', 116, 'city'),
(1424, 'نیک آباد', 116, 'city'),
(1425, 'ورزنه', 116, 'city'),
(1426, 'ورنامخواست', 116, 'city'),
(1427, 'وزوان', 116, 'city'),
(1428, 'ونک', 116, 'city'),
(1429, 'هرند', 116, 'city'),
(1430, 'آبدانان', 117, 'city'),
(1431, 'اراکواز', 117, 'city'),
(1432, 'ایلام', 117, 'city'),
(1433, 'ایوان', 117, 'city'),
(1434, 'بدره', 117, 'city'),
(1435, 'پهله', 117, 'city'),
(1436, 'توحید', 117, 'city'),
(1437, 'چوار', 117, 'city'),
(1438, 'دره شهر', 117, 'city'),
(1439, 'دهلران', 117, 'city'),
(1440, 'زرنه', 117, 'city'),
(1441, 'سرابله', 117, 'city'),
(1442, 'صالح آباد', 117, 'city'),
(1443, 'لومار', 117, 'city'),
(1444, 'مهران', 117, 'city'),
(1445, 'موسیان', 117, 'city'),
(1446, 'میمه', 117, 'city'),
(1447, 'آب پخش', 118, 'city'),
(1448, 'آبدان', 118, 'city'),
(1449, 'امام حسن', 118, 'city'),
(1450, 'اهرم', 118, 'city'),
(1451, 'برازجان', 118, 'city'),
(1452, 'بردخون', 118, 'city'),
(1453, 'بندر دیر', 118, 'city'),
(1454, 'بندر دیلم', 118, 'city'),
(1455, 'بندر ریگ', 118, 'city'),
(1456, 'بندر کنگان', 118, 'city'),
(1457, 'بندر گناوه', 118, 'city'),
(1458, 'بوشهر', 118, 'city'),
(1459, 'جم', 118, 'city'),
(1460, 'چغادک', 118, 'city'),
(1461, 'خارک', 118, 'city'),
(1462, 'خورموج', 118, 'city'),
(1463, 'دالکی', 118, 'city'),
(1464, 'دلوار', 118, 'city'),
(1465, 'سعد آباد', 118, 'city'),
(1466, 'شبانکاره', 118, 'city'),
(1467, 'کاکی', 118, 'city'),
(1468, 'وحدتیه', 118, 'city'),
(1469, 'آبسرد', 119, 'city'),
(1470, 'اسلام شهر', 119, 'city'),
(1471, 'اشتهارد', 119, 'city'),
(1472, 'اندیشه', 119, 'city'),
(1473, 'باقرشهر', 119, 'city'),
(1474, 'بومهن', 119, 'city'),
(1475, 'پاکدشت', 119, 'city'),
(1476, 'پردیس', 119, 'city'),
(1477, 'پیشوا', 119, 'city'),
(1478, 'تجریش', 119, 'city'),
(1479, 'تهران', 119, 'city'),
(1480, 'جوادآباد', 119, 'city'),
(1481, 'چهار دانگه', 119, 'city'),
(1482, 'حسن آباد', 119, 'city'),
(1483, 'دماوند', 119, 'city'),
(1484, 'رباط کریم', 119, 'city'),
(1485, 'رودهن', 119, 'city'),
(1486, 'شاهدشهر', 119, 'city'),
(1487, 'شریف آباد', 119, 'city'),
(1488, 'ری', 119, 'city'),
(1489, 'شهریار', 119, 'city'),
(1490, 'صباشهر', 119, 'city'),
(1491, 'صفادشت', 119, 'city'),
(1492, 'طالقان', 119, 'city'),
(1493, 'فردوسیه', 119, 'city'),
(1494, 'فشم', 119, 'city'),
(1495, 'فیروزکوه', 119, 'city'),
(1496, 'قدس', 119, 'city'),
(1497, 'قرچک', 119, 'city'),
(1498, 'کرج', 119, 'city'),
(1499, 'کمال شهر', 119, 'city'),
(1500, 'کهریزک', 119, 'city'),
(1501, 'کیلان', 119, 'city'),
(1502, 'گلستان', 119, 'city'),
(1503, 'لواسان', 119, 'city'),
(1504, 'ماهدشت', 119, 'city'),
(1505, 'محمدشهر', 119, 'city'),
(1506, 'مشکین دشت', 119, 'city'),
(1507, 'ملارد', 119, 'city'),
(1508, 'نسیم شهر', 119, 'city'),
(1509, 'نظر آباد', 119, 'city'),
(1510, 'وحیدیه', 119, 'city'),
(1511, 'ورامین', 119, 'city'),
(1512, 'هشتگرد', 119, 'city'),
(1513, 'اردل', 120, 'city'),
(1514, 'آلونی', 120, 'city'),
(1515, 'باباحیدر', 120, 'city'),
(1516, 'بروجن', 120, 'city'),
(1517, 'بلداجی', 120, 'city'),
(1518, 'بن', 120, 'city'),
(1519, 'جونقان', 120, 'city'),
(1520, 'چلگرد', 120, 'city'),
(1521, 'سامان', 120, 'city'),
(1522, 'سفید دشت', 120, 'city'),
(1523, 'سودجان', 120, 'city'),
(1524, 'سورشجان', 120, 'city'),
(1525, 'شلمزار', 120, 'city'),
(1526, 'شهر کرد', 120, 'city'),
(1527, 'طاقانک', 120, 'city'),
(1528, 'فارسان', 120, 'city'),
(1529, 'فرادنبه', 120, 'city'),
(1530, 'فرخ شهر', 120, 'city'),
(1531, 'کیان', 120, 'city'),
(1532, 'گندمان', 120, 'city'),
(1533, 'گهرو', 120, 'city'),
(1534, 'لردگان', 120, 'city'),
(1535, 'مال خلیفه', 120, 'city'),
(1536, 'ناغان', 120, 'city'),
(1537, 'نافچ', 120, 'city'),
(1538, 'هفشجان', 120, 'city'),
(1539, 'بیرجند', 121, 'city'),
(1540, 'فردوس', 121, 'city'),
(1541, 'قائن', 121, 'city'),
(1542, 'سرایان', 121, 'city'),
(1543, 'نهبندان', 121, 'city'),
(1544, 'سر بیشه', 121, 'city'),
(1545, 'اسدیه', 121, 'city'),
(1546, 'بشرویه', 121, 'city'),
(1547, 'آیسک', 121, 'city'),
(1548, 'سه قلعه', 121, 'city'),
(1549, 'خوسف', 121, 'city'),
(1550, 'شوسف', 121, 'city'),
(1551, 'انابد', 122, 'city'),
(1552, 'باجگیران', 122, 'city'),
(1553, 'باخرز', 122, 'city'),
(1554, 'بایک', 122, 'city'),
(1555, 'بجستان', 122, 'city'),
(1556, 'بردسکن', 122, 'city'),
(1557, 'بیدخت', 122, 'city'),
(1558, 'تایباد', 122, 'city'),
(1559, 'تربت جام', 122, 'city'),
(1560, 'تربت حیدریه', 122, 'city'),
(1561, 'جغتای', 122, 'city'),
(1562, 'چاپشلو', 122, 'city'),
(1563, 'چکنه', 122, 'city'),
(1564, 'چناران', 122, 'city'),
(1565, 'حاجی آباد', 122, 'city'),
(1566, 'خرو', 122, 'city'),
(1567, 'خضری دشت بیاض', 122, 'city'),
(1568, 'خلیل آباد', 122, 'city'),
(1569, 'خواف', 122, 'city'),
(1570, 'داورزن', 122, 'city'),
(1571, 'دررود', 122, 'city'),
(1572, 'درگز', 122, 'city'),
(1573, 'دولت آباد', 122, 'city'),
(1574, 'رباط سنگ', 122, 'city'),
(1575, 'رشتخوار', 122, 'city'),
(1576, 'رضویه', 122, 'city'),
(1577, 'رودآب', 122, 'city'),
(1578, 'ریوش', 122, 'city'),
(1579, 'سبزوار', 122, 'city'),
(1580, 'سرخس', 122, 'city'),
(1581, 'سلطان آباد', 122, 'city'),
(1582, 'سنگان', 122, 'city'),
(1583, 'شاندیز', 122, 'city'),
(1584, 'ششتمد', 122, 'city'),
(1585, 'صالح آباد', 122, 'city'),
(1586, 'طرقبه', 122, 'city'),
(1587, 'عشق آباد', 122, 'city'),
(1588, 'فرهاد گرد', 122, 'city'),
(1589, 'فریمان', 122, 'city'),
(1590, 'فیروزه', 122, 'city'),
(1591, 'فیض آباد', 122, 'city'),
(1592, 'قاسم آباد', 122, 'city'),
(1593, 'قدمگاه', 122, 'city'),
(1594, 'قلندر آباد', 122, 'city'),
(1595, 'قوچان', 122, 'city'),
(1596, 'کاخک', 122, 'city'),
(1597, 'کاریز', 122, 'city'),
(1598, 'کاشمر', 122, 'city'),
(1599, 'کدکن', 122, 'city'),
(1600, 'کلات', 122, 'city'),
(1601, 'گناباد', 122, 'city'),
(1602, 'لطف آباد', 122, 'city'),
(1603, 'مشهد', 122, 'city'),
(1604, 'ملک آباد', 122, 'city'),
(1605, 'نشتیفان', 122, 'city'),
(1606, 'نصر آباد', 122, 'city'),
(1607, 'نقاب', 122, 'city'),
(1608, 'نو خندان', 122, 'city'),
(1609, 'نیشابور', 122, 'city'),
(1610, 'اسفراین', 123, 'city'),
(1611, 'آشخانه', 123, 'city'),
(1612, 'بجنورد', 123, 'city'),
(1613, 'پیش قلعه', 123, 'city'),
(1614, 'حصار گرم خان', 123, 'city'),
(1615, 'درق', 123, 'city'),
(1616, 'راز', 123, 'city'),
(1617, 'سنخواست', 123, 'city'),
(1618, 'شوقان', 123, 'city'),
(1619, 'شیروان', 123, 'city'),
(1620, 'صفی آباد', 123, 'city'),
(1621, 'فاروج', 123, 'city'),
(1622, 'قاضی', 123, 'city'),
(1623, 'گرمه جاجرم', 123, 'city'),
(1624, 'لوجلی', 123, 'city'),
(1625, 'آبادان', 124, 'city'),
(1626, 'اروند کنار', 124, 'city'),
(1627, 'آغاجاری', 124, 'city'),
(1628, 'الوان', 124, 'city'),
(1629, 'امیدیه', 124, 'city'),
(1630, 'اندیمشک', 124, 'city'),
(1631, 'اهواز', 124, 'city'),
(1632, 'ایذه', 124, 'city'),
(1633, 'باغ', 124, 'city'),
(1634, 'ملک', 124, 'city'),
(1635, 'بستان', 124, 'city'),
(1636, 'بندر امام خمینی', 124, 'city'),
(1637, 'بندر ماهشهر', 124, 'city'),
(1638, 'بهبهان', 124, 'city'),
(1639, 'جایزان', 124, 'city'),
(1640, 'چمران', 124, 'city'),
(1641, 'حر', 124, 'city'),
(1642, 'حسینیه', 124, 'city'),
(1643, 'حمیدیه', 124, 'city'),
(1644, 'خرمشهر', 124, 'city'),
(1645, 'دزآب', 124, 'city'),
(1646, 'دزفول', 124, 'city'),
(1647, 'دهدز', 124, 'city'),
(1648, 'رامشیر', 124, 'city'),
(1649, 'رامهرمز', 124, 'city'),
(1650, 'رفیع', 124, 'city'),
(1651, 'زهره', 124, 'city'),
(1652, 'سالند', 124, 'city'),
(1653, 'سردشت', 124, 'city'),
(1654, 'سوسنگرد', 124, 'city'),
(1655, 'شادگان', 124, 'city'),
(1656, 'شوش', 124, 'city'),
(1657, 'شوشتر', 124, 'city'),
(1658, 'شیبان', 124, 'city'),
(1659, 'صفی آباد', 124, 'city'),
(1660, 'صیدون', 124, 'city'),
(1661, 'قلعه خواجه', 124, 'city'),
(1662, 'قلعه تل', 124, 'city'),
(1663, 'گتوند', 124, 'city'),
(1664, 'لالی', 124, 'city'),
(1665, 'مسجد سلیمان', 124, 'city'),
(1666, 'مقاومت', 124, 'city'),
(1667, 'ملا ثانی', 124, 'city'),
(1668, 'میانرود', 124, 'city'),
(1669, 'مینوشهر', 124, 'city'),
(1670, 'هفتگل', 124, 'city'),
(1671, 'هندیجان', 124, 'city'),
(1672, 'هویزه', 124, 'city'),
(1673, 'ویس', 124, 'city'),
(1674, 'آب بر', 125, 'city'),
(1675, 'ابهر', 125, 'city'),
(1676, 'چورزق', 125, 'city'),
(1677, 'حلب', 125, 'city'),
(1678, 'خرمدره', 125, 'city'),
(1679, 'دندی', 125, 'city'),
(1680, 'زرین آباد', 125, 'city'),
(1681, 'زرین رود', 125, 'city'),
(1682, 'زنجان', 125, 'city'),
(1683, 'سجاس', 125, 'city'),
(1684, 'سلطانیه', 125, 'city'),
(1685, 'صائین قلعه', 125, 'city'),
(1686, 'قیدار', 125, 'city'),
(1687, 'گرماب', 125, 'city'),
(1688, 'ماه نشان', 125, 'city'),
(1689, 'هیدج', 125, 'city'),
(1690, 'آرادان', 126, 'city'),
(1691, 'امیریه', 126, 'city'),
(1692, 'ایوانکی', 126, 'city'),
(1693, 'بسطام', 126, 'city'),
(1694, 'بیارجمند', 126, 'city'),
(1695, 'دامغان', 126, 'city'),
(1696, 'دیباج', 126, 'city'),
(1697, 'سرخه', 126, 'city'),
(1698, 'سمنان', 126, 'city'),
(1699, 'سنگسر', 126, 'city'),
(1700, 'شاهرود', 126, 'city'),
(1701, 'شهمیرزاد', 126, 'city'),
(1702, 'کلاته خیج', 126, 'city'),
(1703, 'گرمسار', 126, 'city'),
(1704, 'مجن', 126, 'city'),
(1705, 'میامی', 126, 'city'),
(1706, 'ادیمی', 127, 'city'),
(1707, 'اسپکه', 127, 'city'),
(1708, 'ایرانشهر', 127, 'city'),
(1709, 'بزمان', 127, 'city'),
(1710, 'بمپور', 127, 'city'),
(1711, 'بنت', 127, 'city'),
(1712, 'بنجار', 127, 'city'),
(1713, 'پیشین', 127, 'city'),
(1714, 'جالق', 127, 'city'),
(1715, 'چابهار', 127, 'city'),
(1716, 'خاش', 127, 'city'),
(1717, 'دوست محمد', 127, 'city'),
(1718, 'راسک', 127, 'city'),
(1719, 'زابل', 127, 'city'),
(1720, 'زابلی', 127, 'city'),
(1721, 'زاهدان', 127, 'city'),
(1722, 'زهک', 127, 'city'),
(1723, 'سراوان', 127, 'city'),
(1724, 'سرباز', 127, 'city'),
(1725, 'سوران', 127, 'city'),
(1726, 'سیرکان', 127, 'city'),
(1727, 'فنوج', 127, 'city'),
(1728, 'قصرقند', 127, 'city'),
(1729, 'کنارک', 127, 'city'),
(1730, 'گلمورتی', 127, 'city'),
(1731, 'محمدآباد', 127, 'city'),
(1732, 'میرجاوه', 127, 'city'),
(1733, 'نصرت آباد', 127, 'city'),
(1734, 'نگور', 127, 'city'),
(1735, 'نوک آباد', 127, 'city'),
(1736, 'نیک شهر', 127, 'city'),
(1737, 'آباده طشک', 128, 'city'),
(1738, 'آباده', 128, 'city'),
(1739, 'اردکان', 128, 'city'),
(1740, 'ارسنجان', 128, 'city'),
(1741, 'اسیر', 128, 'city'),
(1742, 'اشکنان', 128, 'city'),
(1743, 'اقلید', 128, 'city'),
(1744, 'اهل', 128, 'city'),
(1745, 'اوز', 128, 'city'),
(1746, 'ایج', 128, 'city'),
(1747, 'ایزدخواست', 128, 'city'),
(1748, 'باب انار', 128, 'city'),
(1749, 'بالاده', 128, 'city'),
(1750, 'بنارویه', 128, 'city'),
(1751, 'بهمن', 128, 'city'),
(1752, 'بیرم', 128, 'city'),
(1753, 'بیضا', 128, 'city'),
(1754, 'جنت شهر', 128, 'city'),
(1755, 'جهرم', 128, 'city'),
(1756, 'جویم', 128, 'city'),
(1757, 'حاجی آباد', 128, 'city'),
(1758, 'خاوران', 128, 'city'),
(1759, 'خرامه', 128, 'city'),
(1760, 'خشت', 128, 'city'),
(1761, 'خنج', 128, 'city'),
(1762, 'خور', 128, 'city'),
(1763, 'داراب', 128, 'city'),
(1764, 'داریان', 128, 'city'),
(1765, 'رونیز', 128, 'city'),
(1766, 'زاهدشهر', 128, 'city'),
(1767, 'زرقان', 128, 'city'),
(1768, 'سده', 128, 'city'),
(1769, 'سروستان', 128, 'city'),
(1770, 'سعادت شهر', 128, 'city'),
(1771, 'سوریان', 128, 'city'),
(1772, 'سیدان', 128, 'city'),
(1773, 'ششده', 128, 'city'),
(1774, 'شهر پیر', 128, 'city'),
(1775, 'شیراز', 128, 'city'),
(1776, 'صغاد', 128, 'city'),
(1777, 'صفاشهر', 128, 'city'),
(1778, 'علامرودشت', 128, 'city'),
(1779, 'فتح آباد', 128, 'city'),
(1780, 'فراشبند', 128, 'city'),
(1781, 'فسا', 128, 'city'),
(1782, 'فیروز آباد', 128, 'city'),
(1783, 'قائمیه', 128, 'city'),
(1784, 'قادر آباد', 128, 'city'),
(1785, 'قطب آباد', 128, 'city'),
(1786, 'قیر و کارزین', 128, 'city'),
(1787, 'کازرون', 128, 'city'),
(1788, 'کامفیروز', 128, 'city'),
(1789, 'کره ای', 128, 'city'),
(1790, 'کنار تخته', 128, 'city'),
(1791, 'کوار', 128, 'city'),
(1792, 'گراش', 128, 'city'),
(1793, 'گله دار', 128, 'city'),
(1794, 'لار', 128, 'city'),
(1795, 'لامرد', 128, 'city'),
(1796, 'لپوئی', 128, 'city'),
(1797, 'مرودشت', 128, 'city'),
(1798, 'مشکان', 128, 'city'),
(1799, 'مصیری', 128, 'city'),
(1800, 'مهر', 128, 'city'),
(1801, 'میمند', 128, 'city'),
(1802, 'نودان', 128, 'city'),
(1803, 'نور آباد', 128, 'city'),
(1804, 'نیریز', 128, 'city'),
(1805, 'وراوی', 128, 'city'),
(1806, 'آبگرم', 129, 'city'),
(1807, 'آبیک', 129, 'city'),
(1808, 'ارداق', 129, 'city'),
(1809, 'اسفرورین', 129, 'city'),
(1810, 'اقبالیه', 129, 'city'),
(1811, 'الوند', 129, 'city'),
(1812, 'آوج', 129, 'city'),
(1813, 'بوئین زهرا', 129, 'city'),
(1814, 'بیدستان', 129, 'city'),
(1815, 'تاکستان', 129, 'city'),
(1816, 'خرمدشت', 129, 'city'),
(1817, 'دانسفهان', 129, 'city'),
(1818, 'رازمیان', 129, 'city'),
(1819, 'شال', 129, 'city'),
(1820, 'ظیاء آباد', 129, 'city'),
(1821, 'قزوین', 129, 'city'),
(1822, 'کوهین', 129, 'city'),
(1823, 'محمدیه', 129, 'city'),
(1824, 'محمود آباد نمونه', 129, 'city'),
(1825, 'معلم کلایه', 129, 'city'),
(1826, 'جعفریه', 130, 'city'),
(1827, 'دستجرد', 130, 'city'),
(1828, 'قم', 130, 'city'),
(1829, 'قنوات', 130, 'city'),
(1830, 'کهک', 130, 'city'),
(1832, 'آرمرده', 131, 'city'),
(1833, 'بابارشانی', 131, 'city'),
(1834, 'بانه', 131, 'city'),
(1835, 'بوئین سفلی', 131, 'city'),
(1836, 'بیجار', 131, 'city'),
(1837, 'چناره', 131, 'city'),
(1838, 'دزج', 131, 'city'),
(1839, 'دلبران', 131, 'city'),
(1840, 'دهگلان', 131, 'city'),
(1841, 'دیواندره', 131, 'city'),
(1842, 'زرینه', 131, 'city'),
(1843, 'سروآباد', 131, 'city'),
(1844, 'سریش آباد', 131, 'city'),
(1845, 'سقز', 131, 'city'),
(1846, 'سنندج', 131, 'city'),
(1847, 'شویشه', 131, 'city'),
(1848, 'صاحب', 131, 'city'),
(1849, 'قروه', 131, 'city'),
(1850, 'کامیاران', 131, 'city'),
(1851, 'کانی سور', 131, 'city'),
(1852, 'مریوان', 131, 'city'),
(1853, 'موچش', 131, 'city'),
(1854, 'یاسوکند', 131, 'city'),
(1855, 'اختیار آباد', 132, 'city'),
(1856, 'ارزوئیه', 132, 'city'),
(1857, 'انار', 132, 'city'),
(1858, 'باغین', 132, 'city'),
(1859, 'بافت', 132, 'city'),
(1860, 'بردسیر', 132, 'city'),
(1861, 'بروات', 132, 'city'),
(1862, 'بزنجان', 132, 'city'),
(1863, 'بم', 132, 'city'),
(1864, 'بهرمان', 132, 'city'),
(1865, 'پاریز', 132, 'city'),
(1866, 'جبالبارز', 132, 'city'),
(1867, 'جوپار', 132, 'city'),
(1868, 'جیرفت', 132, 'city'),
(1869, 'چترود', 132, 'city'),
(1870, 'حسین آباد', 132, 'city'),
(1871, 'خانوک', 132, 'city'),
(1872, 'درب بهشت', 132, 'city'),
(1873, 'دهج', 132, 'city'),
(1874, 'رابر', 132, 'city'),
(1875, 'راور', 132, 'city'),
(1876, 'راین', 132, 'city'),
(1877, 'رفسنجان', 132, 'city'),
(1878, 'رودبار', 132, 'city'),
(1879, 'زرند', 132, 'city'),
(1880, 'زنگی آباد', 132, 'city'),
(1881, 'زید آباد', 132, 'city'),
(1882, 'سیرجان', 132, 'city'),
(1883, 'شهداد', 132, 'city'),
(1884, 'شهر بابک', 132, 'city'),
(1885, 'عنبر آباد', 132, 'city'),
(1886, 'فاریاب', 132, 'city'),
(1887, 'فهرج', 132, 'city'),
(1888, 'قلعه گنج', 132, 'city'),
(1889, 'کاظم آباد', 132, 'city'),
(1890, 'کرمان', 132, 'city'),
(1891, 'کشکوئیه', 132, 'city'),
(1892, 'کهنوج', 132, 'city'),
(1893, 'کوه بنان', 132, 'city'),
(1894, 'کیان شهر', 132, 'city'),
(1895, 'گلباف', 132, 'city'),
(1896, 'گلزار', 132, 'city'),
(1897, 'ماهان', 132, 'city'),
(1898, 'محمد آباد', 132, 'city'),
(1899, 'محی آباد', 132, 'city'),
(1900, 'مس سرچشمه', 132, 'city'),
(1901, 'منوجان', 132, 'city'),
(1902, 'نجف شهر', 132, 'city'),
(1903, 'نرماشیر', 132, 'city'),
(1904, 'نگار', 132, 'city'),
(1905, 'اسلام آباد غرب ( شاه آباد )', 133, 'city'),
(1906, 'باینگان', 133, 'city'),
(1907, 'بیستون', 133, 'city'),
(1908, 'پاوه', 133, 'city'),
(1909, 'تازه آباد', 133, 'city'),
(1910, 'جوانرود', 133, 'city'),
(1911, 'حمیل', 133, 'city'),
(1912, 'رباط', 133, 'city'),
(1913, 'روانسر', 133, 'city'),
(1914, 'سرپل ذهاب', 133, 'city'),
(1915, 'سرمست', 133, 'city'),
(1916, 'سنقر', 133, 'city'),
(1917, 'سومار', 133, 'city'),
(1918, 'صحنه', 133, 'city'),
(1919, 'قصر شیرین', 133, 'city'),
(1920, 'کرمانشاه', 133, 'city'),
(1921, 'کرند', 133, 'city'),
(1922, 'کنگاور', 133, 'city'),
(1923, 'کوزران', 133, 'city'),
(1924, 'گهواره', 133, 'city'),
(1925, 'گیلان غرب', 133, 'city'),
(1926, 'میان راهان', 133, 'city'),
(1927, 'نودشه', 133, 'city'),
(1928, 'نوسود', 133, 'city'),
(1929, 'هرسین', 133, 'city'),
(1930, 'هلشی', 133, 'city'),
(1931, 'رشت', 136, 'city'),
(1932, 'صومعه سرا', 136, 'city'),
(1933, 'دابودشت', 138, 'city'),
(101, 'آذربایجان شرقی', 11, 'state'),
(114, 'آذربایجان غربی', 11, 'state'),
(115, 'اردبیل', 11, 'state'),
(116, 'اصفهان', 11, 'state'),
(117, 'ایلام', 11, 'state'),
(118, 'بوشهر', 11, 'state'),
(119, 'تهران', 11, 'state'),
(120, 'چهار محال و بختیاری', 11, 'state'),
(121, 'خراسان جنوبی', 11, 'state'),
(122, 'خراسان رضوی', 11, 'state'),
(123, 'خراسان شمالی', 11, 'state'),
(124, 'خوزستان', 11, 'state'),
(125, 'زنجان', 11, 'state'),
(126, 'سمنان', 11, 'state'),
(127, 'سیستان و بلوچستان', 11, 'state'),
(128, 'فارس', 11, 'state'),
(129, 'قزوین', 11, 'state'),
(130, 'قم', 11, 'state'),
(131, 'کردستان', 11, 'state'),
(132, 'کرمان', 11, 'state'),
(133, 'کرمانشاه', 11, 'state'),
(134, 'کهکیلویه و بویراحمد', 11, 'state'),
(135, 'گلستان', 11, 'state'),
(136, 'گیلان', 11, 'state'),
(137, 'لرستان', 11, 'state'),
(138, 'مازندران', 11, 'state'),
(139, 'مرکزی', 11, 'state'),
(140, 'هرمزگان', 11, 'state'),
(141, 'همدان', 11, 'state'),
(142, 'یزد', 11, 'state'),
(1, 'آسیا', 0, 'continent'),
(2, 'اروپا', 0, 'continent'),
(3, 'آمریکا', 0, 'continent'),
(4, 'اقیانوسیه', 0, 'continent'),
(5, 'آفریقا', 0, 'continent'),
(1940, 'یوسف آباد', 1479, 'region'),
(11, 'ایران', 1, 'country'),
(12, 'امارات متحده عربی', 1, 'country'),
(1939, 'ستارخان', 1479, 'region'),
(1947, 'سجاد', 1603, 'region'),
(1944, 'وکیل آباد', 1603, 'region'),
(1946, 'احمدآباد', 1603, 'region'),
(1948, 'آزادشهر', 1603, 'region');


ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1949;



