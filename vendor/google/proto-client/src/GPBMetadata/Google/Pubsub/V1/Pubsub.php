<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace GPBMetadata\Google\Pubsub\V1;

class Pubsub
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a96350a1d676f6f676c652f7075627375622f76312f7075627375622e70" .
            "726f746f1210676f6f676c652e7075627375622e76311a1e676f6f676c65" .
            "2f70726f746f6275662f6475726174696f6e2e70726f746f1a1b676f6f67" .
            "6c652f70726f746f6275662f656d7074792e70726f746f1a20676f6f676c" .
            "652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a1f67" .
            "6f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f" .
            "22790a05546f706963120c0a046e616d6518012001280912330a066c6162" .
            "656c7318022003280b32232e676f6f676c652e7075627375622e76312e54" .
            "6f7069632e4c6162656c73456e7472791a2d0a0b4c6162656c73456e7472" .
            "79120b0a036b6579180120012809120d0a0576616c75651802200128093a" .
            "02380122db010a0d5075627375624d657373616765120c0a046461746118" .
            "012001280c12430a0a6174747269627574657318022003280b322f2e676f" .
            "6f676c652e7075627375622e76312e5075627375624d6573736167652e41" .
            "747472696275746573456e74727912120a0a6d6573736167655f69641803" .
            "2001280912300a0c7075626c6973685f74696d6518042001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e54696d657374616d701a310a0f4174" .
            "7472696275746573456e747279120b0a036b6579180120012809120d0a05" .
            "76616c75651802200128093a02380122200a0f476574546f706963526571" .
            "75657374120d0a05746f706963180120012809226d0a1255706461746554" .
            "6f7069635265717565737412260a05746f70696318012001280b32172e67" .
            "6f6f676c652e7075627375622e76312e546f706963122f0a0b7570646174" .
            "655f6d61736b18022001280b321a2e676f6f676c652e70726f746f627566" .
            "2e4669656c644d61736b22520a0e5075626c69736852657175657374120d" .
            "0a05746f70696318012001280912310a086d657373616765731802200328" .
            "0b321f2e676f6f676c652e7075627375622e76312e5075627375624d6573" .
            "7361676522260a0f5075626c697368526573706f6e736512130a0b6d6573" .
            "736167655f696473180120032809224b0a114c697374546f706963735265" .
            "7175657374120f0a0770726f6a65637418012001280912110a0970616765" .
            "5f73697a6518022001280512120a0a706167655f746f6b656e1803200128" .
            "0922560a124c697374546f70696373526573706f6e736512270a06746f70" .
            "69637318012003280b32172e676f6f676c652e7075627375622e76312e54" .
            "6f70696312170a0f6e6578745f706167655f746f6b656e18022001280922" .
            "550a1d4c697374546f706963537562736372697074696f6e735265717565" .
            "7374120d0a05746f70696318012001280912110a09706167655f73697a65" .
            "18022001280512120a0a706167655f746f6b656e18032001280922500a1e" .
            "4c697374546f706963537562736372697074696f6e73526573706f6e7365" .
            "12150a0d737562736372697074696f6e7318012003280912170a0f6e6578" .
            "745f706167655f746f6b656e18022001280922230a1244656c657465546f" .
            "70696352657175657374120d0a05746f70696318012001280922c5020a0c" .
            "537562736372697074696f6e120c0a046e616d65180120012809120d0a05" .
            "746f70696318022001280912310a0b707573685f636f6e66696718042001" .
            "280b321c2e676f6f676c652e7075627375622e76312e50757368436f6e66" .
            "6967121c0a1461636b5f646561646c696e655f7365636f6e647318052001" .
            "2805121d0a1572657461696e5f61636b65645f6d65737361676573180720" .
            "012808123d0a1a6d6573736167655f726574656e74696f6e5f6475726174" .
            "696f6e18082001280b32192e676f6f676c652e70726f746f6275662e4475" .
            "726174696f6e123a0a066c6162656c7318092003280b322a2e676f6f676c" .
            "652e7075627375622e76312e537562736372697074696f6e2e4c6162656c" .
            "73456e7472791a2d0a0b4c6162656c73456e747279120b0a036b65791801" .
            "20012809120d0a0576616c75651802200128093a0238012298010a0a5075" .
            "7368436f6e66696712150a0d707573685f656e64706f696e741801200128" .
            "0912400a0a6174747269627574657318022003280b322c2e676f6f676c65" .
            "2e7075627375622e76312e50757368436f6e6669672e4174747269627574" .
            "6573456e7472791a310a0f41747472696275746573456e747279120b0a03" .
            "6b6579180120012809120d0a0576616c75651802200128093a0238012253" .
            "0a0f52656365697665644d657373616765120e0a0661636b5f6964180120" .
            "01280912300a076d65737361676518022001280b321f2e676f6f676c652e" .
            "7075627375622e76312e5075627375624d657373616765222e0a16476574" .
            "537562736372697074696f6e5265717565737412140a0c73756273637269" .
            "7074696f6e1801200128092282010a195570646174655375627363726970" .
            "74696f6e5265717565737412340a0c737562736372697074696f6e180120" .
            "01280b321e2e676f6f676c652e7075627375622e76312e53756273637269" .
            "7074696f6e122f0a0b7570646174655f6d61736b18022001280b321a2e67" .
            "6f6f676c652e70726f746f6275662e4669656c644d61736b22520a184c69" .
            "7374537562736372697074696f6e7352657175657374120f0a0770726f6a" .
            "65637418012001280912110a09706167655f73697a651802200128051212" .
            "0a0a706167655f746f6b656e180320012809226b0a194c69737453756273" .
            "6372697074696f6e73526573706f6e736512350a0d737562736372697074" .
            "696f6e7318012003280b321e2e676f6f676c652e7075627375622e76312e" .
            "537562736372697074696f6e12170a0f6e6578745f706167655f746f6b65" .
            "6e18022001280922310a1944656c657465537562736372697074696f6e52" .
            "65717565737412140a0c737562736372697074696f6e1801200128092262" .
            "0a174d6f6469667950757368436f6e6669675265717565737412140a0c73" .
            "7562736372697074696f6e18012001280912310a0b707573685f636f6e66" .
            "696718022001280b321c2e676f6f676c652e7075627375622e76312e5075" .
            "7368436f6e66696722550a0b50756c6c5265717565737412140a0c737562" .
            "736372697074696f6e180120012809121a0a1272657475726e5f696d6d65" .
            "64696174656c7918022001280812140a0c6d61785f6d6573736167657318" .
            "0320012805224c0a0c50756c6c526573706f6e7365123c0a117265636569" .
            "7665645f6d6573736167657318012003280b32212e676f6f676c652e7075" .
            "627375622e76312e52656365697665644d657373616765225f0a184d6f64" .
            "69667941636b446561646c696e655265717565737412140a0c7375627363" .
            "72697074696f6e180120012809120f0a0761636b5f696473180420032809" .
            "121c0a1461636b5f646561646c696e655f7365636f6e6473180320012805" .
            "223b0a1241636b6e6f776c656467655265717565737412140a0c73756273" .
            "6372697074696f6e180120012809120f0a0761636b5f6964731802200328" .
            "0922a4010a1453747265616d696e6750756c6c5265717565737412140a0c" .
            "737562736372697074696f6e180120012809120f0a0761636b5f69647318" .
            "0220032809121f0a176d6f646966795f646561646c696e655f7365636f6e" .
            "6473180320032805121f0a176d6f646966795f646561646c696e655f6163" .
            "6b5f69647318042003280912230a1b73747265616d5f61636b5f64656164" .
            "6c696e655f7365636f6e647318052001280522550a1553747265616d696e" .
            "6750756c6c526573706f6e7365123c0a1172656365697665645f6d657373" .
            "6167657318012003280b32212e676f6f676c652e7075627375622e76312e" .
            "52656365697665644d657373616765223b0a15437265617465536e617073" .
            "686f7452657175657374120c0a046e616d6518012001280912140a0c7375" .
            "62736372697074696f6e18022001280922760a15557064617465536e6170" .
            "73686f7452657175657374122c0a08736e617073686f7418012001280b32" .
            "1a2e676f6f676c652e7075627375622e76312e536e617073686f74122f0a" .
            "0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e7072" .
            "6f746f6275662e4669656c644d61736b22bf010a08536e617073686f7412" .
            "0c0a046e616d65180120012809120d0a05746f706963180220012809122f" .
            "0a0b6578706972655f74696d6518032001280b321a2e676f6f676c652e70" .
            "726f746f6275662e54696d657374616d7012360a066c6162656c73180420" .
            "03280b32262e676f6f676c652e7075627375622e76312e536e617073686f" .
            "742e4c6162656c73456e7472791a2d0a0b4c6162656c73456e747279120b" .
            "0a036b6579180120012809120d0a0576616c75651802200128093a023801" .
            "224e0a144c697374536e617073686f747352657175657374120f0a077072" .
            "6f6a65637418012001280912110a09706167655f73697a65180220012805" .
            "12120a0a706167655f746f6b656e180320012809225f0a154c697374536e" .
            "617073686f7473526573706f6e7365122d0a09736e617073686f74731801" .
            "2003280b321a2e676f6f676c652e7075627375622e76312e536e61707368" .
            "6f7412170a0f6e6578745f706167655f746f6b656e18022001280922290a" .
            "1544656c657465536e617073686f745265717565737412100a08736e6170" .
            "73686f74180120012809226d0a0b5365656b5265717565737412140a0c73" .
            "7562736372697074696f6e180120012809122a0a0474696d651802200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e54696d657374616d7048" .
            "0012120a08736e617073686f74180320012809480042080a067461726765" .
            "74220e0a0c5365656b526573706f6e736532f7100a0a5375627363726962" .
            "65721286010a12437265617465537562736372697074696f6e121e2e676f" .
            "6f676c652e7075627375622e76312e537562736372697074696f6e1a1e2e" .
            "676f6f676c652e7075627375622e76312e537562736372697074696f6e22" .
            "3082d3e493022a1a252f76312f7b6e616d653d70726f6a656374732f2a2f" .
            "737562736372697074696f6e732f2a7d3a012a1292010a0f476574537562" .
            "736372697074696f6e12282e676f6f676c652e7075627375622e76312e47" .
            "6574537562736372697074696f6e526571756573741a1e2e676f6f676c65" .
            "2e7075627375622e76312e537562736372697074696f6e223582d3e49302" .
            "2f122d2f76312f7b737562736372697074696f6e3d70726f6a656374732f" .
            "2a2f737562736372697074696f6e732f2a7d12a0010a1255706461746553" .
            "7562736372697074696f6e122b2e676f6f676c652e7075627375622e7631" .
            "2e557064617465537562736372697074696f6e526571756573741a1e2e67" .
            "6f6f676c652e7075627375622e76312e537562736372697074696f6e223d" .
            "82d3e493023732322f76312f7b737562736372697074696f6e2e6e616d65" .
            "3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a01" .
            "2a129c010a114c697374537562736372697074696f6e73122a2e676f6f67" .
            "6c652e7075627375622e76312e4c697374537562736372697074696f6e73" .
            "526571756573741a2b2e676f6f676c652e7075627375622e76312e4c6973" .
            "74537562736372697074696f6e73526573706f6e7365222e82d3e4930228" .
            "12262f76312f7b70726f6a6563743d70726f6a656374732f2a7d2f737562" .
            "736372697074696f6e731290010a1244656c657465537562736372697074" .
            "696f6e122b2e676f6f676c652e7075627375622e76312e44656c65746553" .
            "7562736372697074696f6e526571756573741a162e676f6f676c652e7072" .
            "6f746f6275662e456d707479223582d3e493022f2a2d2f76312f7b737562" .
            "736372697074696f6e3d70726f6a656374732f2a2f737562736372697074" .
            "696f6e732f2a7d12a3010a114d6f6469667941636b446561646c696e6512" .
            "2a2e676f6f676c652e7075627375622e76312e4d6f6469667941636b4465" .
            "61646c696e65526571756573741a162e676f6f676c652e70726f746f6275" .
            "662e456d707479224a82d3e4930244223f2f76312f7b7375627363726970" .
            "74696f6e3d70726f6a656374732f2a2f737562736372697074696f6e732f" .
            "2a7d3a6d6f6469667941636b446561646c696e653a012a1291010a0b4163" .
            "6b6e6f776c6564676512242e676f6f676c652e7075627375622e76312e41" .
            "636b6e6f776c65646765526571756573741a162e676f6f676c652e70726f" .
            "746f6275662e456d707479224482d3e493023e22392f76312f7b73756273" .
            "6372697074696f6e3d70726f6a656374732f2a2f73756273637269707469" .
            "6f6e732f2a7d3a61636b6e6f776c656467653a012a1284010a0450756c6c" .
            "121d2e676f6f676c652e7075627375622e76312e50756c6c526571756573" .
            "741a1e2e676f6f676c652e7075627375622e76312e50756c6c526573706f" .
            "6e7365223d82d3e493023722322f76312f7b737562736372697074696f6e" .
            "3d70726f6a656374732f2a2f737562736372697074696f6e732f2a7d3a70" .
            "756c6c3a012a12640a0d53747265616d696e6750756c6c12262e676f6f67" .
            "6c652e7075627375622e76312e53747265616d696e6750756c6c52657175" .
            "6573741a272e676f6f676c652e7075627375622e76312e53747265616d69" .
            "6e6750756c6c526573706f6e73652801300112a0010a104d6f6469667950" .
            "757368436f6e66696712292e676f6f676c652e7075627375622e76312e4d" .
            "6f6469667950757368436f6e666967526571756573741a162e676f6f676c" .
            "652e70726f746f6275662e456d707479224982d3e4930243223e2f76312f" .
            "7b737562736372697074696f6e3d70726f6a656374732f2a2f7375627363" .
            "72697074696f6e732f2a7d3a6d6f6469667950757368436f6e6669673a01" .
            "2a128c010a0d4c697374536e617073686f747312262e676f6f676c652e70" .
            "75627375622e76312e4c697374536e617073686f7473526571756573741a" .
            "272e676f6f676c652e7075627375622e76312e4c697374536e617073686f" .
            "7473526573706f6e7365222a82d3e493022412222f76312f7b70726f6a65" .
            "63743d70726f6a656374732f2a7d2f736e617073686f74731283010a0e43" .
            "7265617465536e617073686f7412272e676f6f676c652e7075627375622e" .
            "76312e437265617465536e617073686f74526571756573741a1a2e676f6f" .
            "676c652e7075627375622e76312e536e617073686f74222c82d3e4930226" .
            "1a212f76312f7b6e616d653d70726f6a656374732f2a2f736e617073686f" .
            "74732f2a7d3a012a128c010a0e557064617465536e617073686f7412272e" .
            "676f6f676c652e7075627375622e76312e557064617465536e617073686f" .
            "74526571756573741a1a2e676f6f676c652e7075627375622e76312e536e" .
            "617073686f74223582d3e493022f322a2f76312f7b736e617073686f742e" .
            "6e616d653d70726f6a656374732f2a2f736e617073686f74732f2a7d3a01" .
            "2a1280010a0e44656c657465536e617073686f7412272e676f6f676c652e" .
            "7075627375622e76312e44656c657465536e617073686f74526571756573" .
            "741a162e676f6f676c652e70726f746f6275662e456d707479222d82d3e4" .
            "9302272a252f76312f7b736e617073686f743d70726f6a656374732f2a2f" .
            "736e617073686f74732f2a7d1284010a045365656b121d2e676f6f676c65" .
            "2e7075627375622e76312e5365656b526571756573741a1e2e676f6f676c" .
            "652e7075627375622e76312e5365656b526573706f6e7365223d82d3e493" .
            "023722322f76312f7b737562736372697074696f6e3d70726f6a65637473" .
            "2f2a2f737562736372697074696f6e732f2a7d3a7365656b3a012a329a07" .
            "0a095075626c6973686572126a0a0b437265617465546f70696312172e67" .
            "6f6f676c652e7075627375622e76312e546f7069631a172e676f6f676c65" .
            "2e7075627375622e76312e546f706963222982d3e49302231a1e2f76312f" .
            "7b6e616d653d70726f6a656374732f2a2f746f706963732f2a7d3a012a12" .
            "7d0a0b557064617465546f70696312242e676f6f676c652e707562737562" .
            "2e76312e557064617465546f706963526571756573741a172e676f6f676c" .
            "652e7075627375622e76312e546f706963222f82d3e493022932242f7631" .
            "2f7b746f7069632e6e616d653d70726f6a656374732f2a2f746f70696373" .
            "2f2a7d3a012a1282010a075075626c69736812202e676f6f676c652e7075" .
            "627375622e76312e5075626c697368526571756573741a212e676f6f676c" .
            "652e7075627375622e76312e5075626c697368526573706f6e7365223282" .
            "d3e493022c22272f76312f7b746f7069633d70726f6a656374732f2a2f74" .
            "6f706963732f2a7d3a7075626c6973683a012a126f0a08476574546f7069" .
            "6312212e676f6f676c652e7075627375622e76312e476574546f70696352" .
            "6571756573741a172e676f6f676c652e7075627375622e76312e546f7069" .
            "63222782d3e4930221121f2f76312f7b746f7069633d70726f6a65637473" .
            "2f2a2f746f706963732f2a7d1280010a0a4c697374546f7069637312232e" .
            "676f6f676c652e7075627375622e76312e4c697374546f70696373526571" .
            "756573741a242e676f6f676c652e7075627375622e76312e4c697374546f" .
            "70696373526573706f6e7365222782d3e4930221121f2f76312f7b70726f" .
            "6a6563743d70726f6a656374732f2a7d2f746f7069637312b2010a164c69" .
            "7374546f706963537562736372697074696f6e73122f2e676f6f676c652e" .
            "7075627375622e76312e4c697374546f706963537562736372697074696f" .
            "6e73526571756573741a302e676f6f676c652e7075627375622e76312e4c" .
            "697374546f706963537562736372697074696f6e73526573706f6e736522" .
            "3582d3e493022f122d2f76312f7b746f7069633d70726f6a656374732f2a" .
            "2f746f706963732f2a7d2f737562736372697074696f6e7312740a0b4465" .
            "6c657465546f70696312242e676f6f676c652e7075627375622e76312e44" .
            "656c657465546f706963526571756573741a162e676f6f676c652e70726f" .
            "746f6275662e456d707479222782d3e49302212a1f2f76312f7b746f7069" .
            "633d70726f6a656374732f2a2f746f706963732f2a7d4292010a14636f6d" .
            "2e676f6f676c652e7075627375622e7631420b50756273756250726f746f" .
            "50015a36676f6f676c652e676f6c616e672e6f72672f67656e70726f746f" .
            "2f676f6f676c65617069732f7075627375622f76313b707562737562f801" .
            "01aa0216476f6f676c652e436c6f75642e5075625375622e5631ca021647" .
            "6f6f676c655c436c6f75645c5075625375625c5631620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

